<?php

namespace App\Http\Controllers;
use App\Dokter;
use App\Diagnosa;
use App\Pasien;
use Illuminate\Http\Request;

class DiagnosaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['data']=Diagnosa::get();
        return view('dokter.diagnosa.list_diagnosa', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['data']=Dokter::get();
        return view('dokter.diagnosa.list_diagnosa', $data);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$cari = $request->get('no_pasien');
		$id = $request->get('no_pasien');
        Diagnosa::create([
          'id_diagnosa'=> $request->id_diagnosa,
          'no_pasien'=> $request->no_pasien,
          'nid'=> $request->nid,
          'id_perawat' => $request->id_perawat,
          'gejala' => $request->gejala,
          'tgl_diagnosa' => $request->tgl_diagnosa,
        ]);
	  return redirect()->route('diagnosa.show', $id);
      //return view('dokter.diagnosa.list_diagnosa', compact('data'))->with('cari', $cari);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Diagnosa  $diagnosa
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
		$cari= $id;
        $data=Diagnosa::where('no_pasien', $cari)->get();
        return view('dokter.diagnosa.list_diagnosa', compact('data'))->with('cari', $cari);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Diagnosa  $diagnosa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $dtr['dtr']=Dokter::get();
      $data['data']=Diagnosa::find($id);
      return view('dokter.diagnosa.formubah_diagnosa', $data, $dtr);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Diagnosa  $diagnosa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $temp=Diagnosa::find($id)->value('id_diagnosa');
        Diagnosa::find($id)->update(['no_pasien'=> $request->no_pasien]);
        Diagnosa::find($id)->update(['nid'=> $request->nid]);
        Diagnosa::find($id)->update(['id_perawat'=> $request->id_perawat]);
        Diagnosa::find($id)->update(['gejala'=> $request->gejala]);
        return redirect()->route('pasien.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Diagnosa  $diagnosa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $temp=Diagnosa::find($id)->value('id_diagnosa');
      Diagnosa::find($id)->delete();
      return redirect()->route('diagnosa.show',$temp)->with('message', 'Data berhasil di hapus');
    }

    public function showdetail(Request $request){
        $cari = $request->get('search');
        $data = Pasien::where('no_pasien', $cari)->get();
        $dtr =  Dokter::get();
        return view('dokter.diagnosa.form_diagnosa', compact('data'),compact('dtr'))->with('cari', $cari);
    }
}
