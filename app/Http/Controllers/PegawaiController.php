<?php

namespace App\Http\Controllers;

use App\Pegawai;
use App\StatusBagian;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
     {
       $data['data']=Pegawai::get();
       return view('admin.pegawai.list_pegawai', $data);
     }

     /**
      * Show the form for creating a new resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function create()
     {
       $status['status']=StatusBagian::get();
       $data['data']=Pegawai::get();
       return view('admin.pegawai.form_pegawai', $data, $status);
     }

     /**
      * Store a newly created resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @return \Illuminate\Http\Response
      */
     public function store(Request $request)
     {
       Pegawai::create([
             'nip' => $request->nip,
             'id' => $request->id,
             'nama_pegawai' => $request->nama_pegawai,
             'id_status' => $request->id_status,
             'tgl_lahir' => $request->tgl_lahir,
             'tempat_lahir' => $request->tempat_lahir,
             'umur' => $request->umur,
             'jenis_kelamin' => $request->jenis_kelamin,
             'alamat' => $request->alamat,
             'no_telp' =>$request->no_telp,
                 ]);
         return redirect()->route('pegawai.index')->with('message', 'Data berhasil diinput');
     }

     /**
      * Display the specified resource.
      *
      * @param  \App\Pegawai  $Pegawai
      * @return \Illuminate\Http\Response
      */
     public function show($id)
     {
       $data['data']=Pegawai::where('nip',$id)->paginate(6);
       return view('admin.pegawai.list_pegawai', $data);
     }

     /**
      * Show the form for editing the specified resource.
      *
      * @param  \App\Pegawai  $Pegawai
      * @return \Illuminate\Http\Response
      */
     public function edit($id)
     {
       $status['status']=StatusBagian::get();
       $data['data']=Pegawai::find($id);
       return view('admin.pegawai.formubah_pegawai', $data, $status);
     }

     /**
      * Update the specified resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @param  \App\Pegawai  $Pegawai
      * @return \Illuminate\Http\Response
      */
     public function update(Request $request, $id)
     {
       Pegawai::find($id)->update(['nama_pegawai'=>$request->nama_pegawai]);
       Pegawai::find($id)->update(['id_status'=>$request->id_status]);
       Pegawai::find($id)->update(['tgl_lahir'=>$request->tgl_lahir]);
       Pegawai::find($id)->update(['tempat_lahir'=>$request->tempat_lahir]);
       Pegawai::find($id)->update(['umur'=>$request->umur]);
       Pegawai::find($id)->update(['jenis_kelamin'=>$request->jenis_kelamin]);
       Pegawai::find($id)->update(['alamat'=>$request->alamat]);
       Pegawai::find($id)->update(['no_telp'=>$request->no_telp]);
       return redirect()->route('pegawai.index');
     }

     /**
      * Remove the specified resource from storage.
      *
      * @param  \App\Pegawai  $Pegawai
      * @return \Illuminate\Http\Response
      */
     public function destroy($id)
     {
       $temp=Pegawai::find($id)->value('nip');
       Pegawai::find($id)->delete();

       return redirect()->route('pegawai.show',$temp)->with('message', 'Data berhasil di hapus');
     }
}
