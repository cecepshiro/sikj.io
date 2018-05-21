<?php

namespace App\Http\Controllers;

use App\Pasien;
use App\JenisPasien;
use App\Diagnosa;
use DB;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $data['data']=Pasien::get();
         return view('pasien.list_pasien', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $items['items']=JenisPasien::get();
      $data['data']=Pasien::get();
      return view('pasien.form_pasien',$data, $items);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      Pasien::create([
            'no_pasien' => $request->no_pasien,
            'nama_pasien' => $request->nama_pasien,
            'id_jenis_pasien'=>$request->id_jenis_pasien,
            'tgl_lahir' => $request->tgl_lahir,
            'tempat_lahir' => $request->tempat_lahir,
            'umur' => $request->umur,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat' => $request->alamat,
            'no_telp' =>$request->no_telp,
            'nip' =>$request->nip,

                ]);
        return redirect()->route('pasien.index')->with('message', 'Data berhasil diinput');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $items['items']=JenisPasien::get();
      $data['data']=Pasien::find($id);
      return view("pasien.list_detail_pasien", $data, $items);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $items['items']=JenisPasien::get();
      $data['data']=Pasien::find($id);
      return view("pasien.formubah_pasien", $data, $items);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      Pasien::find($id)->update(['nama_pasien'=>$request->nama_pasien]);
      Pasien::find($id)->update(['id_jenis_pasien'=>$request->id_jenis_pasien]);
      Pasien::find($id)->update(['tgl_lahir'=>$request->tgl_lahir]);
      Pasien::find($id)->update(['tempat_lahir'=>$request->tempat_lahir]);
      Pasien::find($id)->update(['umur'=>$request->umur]);
      Pasien::find($id)->update(['jenis_kelamin'=>$request->jenis_kelamin]);
      Pasien::find($id)->update(['alamat'=>$request->alamat]);
      Pasien::find($id)->update(['no_telp'=>$request->no_telp]);
      Pasien::find($id)->update(['nip'=>$request->nip]);
      return redirect()->route('pasien.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $temp=Pasien::find($id)->value('no_pasien');
      Pasien::find($id)->delete();

      return redirect()->route('pasien.show',$temp)->with('message', 'Data berhasil di hapus');
    }

    public function showdetail(Request $request){
        $cari = $request->get('search');
        $data = Diagnosa::where('no_pasien', $cari)->get();
        return view('dokter.diagnosa.list_diagnosa', compact('data'))->with('cari', $cari);
    }


}
