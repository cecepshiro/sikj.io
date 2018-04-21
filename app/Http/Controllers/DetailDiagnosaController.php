<?php

namespace App\Http\Controllers;

use App\DetailDiagnosa;
use App\Diagnosa;
use DB;
use Illuminate\Http\Request;

class DetailDiagnosaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['data']=DetailDiagnosa::get();
        return view('dokter.detail.list_detail');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $cari= $id;
        // return view('dokter.detail.form_detail')->with('cari',$cari);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = $request->get('id_diagnosa');
        DetailDiagnosa::create([
        //   'id_detail_diagnosa'=> $request->id_detail_diagnosa,
          'id_diagnosa'=> $request->id_diagnosa,
          'nama_penyakit'=> $request->nama_penyakit,
          'nama_obat'=> $request->nama_obat,
          'sifat' => $request->sifat,
          'keterangan' => $request->keterangan,
        ]);
	  return redirect()->route('detaildiagnosa.show', $id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DetailDiagnosa  $detailDiagnosa
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $cari= $id;
         $data=DetailDiagnosa::where('id_diagnosa', $cari)->get();
         return view('dokter.detail.list_detail', compact('data'))->with('cari', $cari);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DetailDiagnosa  $detailDiagnosa
     * @return \Illuminate\Http\Response
     */
    public function edit(DetailDiagnosa $detailDiagnosa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DetailDiagnosa  $detailDiagnosa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $temp=DetailDiagnosa::find($id)->value('id_detail_diagnosa');
        DetailDiagnosa::find($id)->update(['nama_penyakit'=> $request->nama_penyakit]);
        DetailDiagnosa::find($id)->update(['nama_obat'=> $request->nama_obat]);
        DetailDiagnosa::find($id)->update(['sifat'=> $request->sifat]);
        DetailDiagnosa::find($id)->update(['keterangan'=> $request->keterangan]);
        return redirect()->route('detaildiagnosa.index', $temp);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DetailDiagnosa  $detailDiagnosa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $temp=DetailDiagnosa::find($id)->value('id_detail_diagnosa');
      DetailDiagnosa::find($id)->delete();

      return redirect()->route('detaildiagnosa.index')->with('message', 'Data berhasil di hapus');
    }

    public function showformdetail(Request $request){
        $cari = $request-> cari;
        $data = Diagnosa::where('id_diagnosa', $cari)->get();
        return view('dokter.detail.form_detail', compact('data'))->with('cari', $cari);
    }
}
