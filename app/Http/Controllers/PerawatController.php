<?php

namespace App\Http\Controllers;

use App\Perawat;
use Illuminate\Http\Request;

class PerawatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
     {
       $data['data']=Perawat::get();
       return view('admin.perawat.list_perawat', $data);
     }

     /**
      * Show the form for creating a new resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function create()
     {
       $data['data']=Perawat::get();
       return view('admin.perawat.form_perawat', $data);
     }

     /**
      * Store a newly created resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @return \Illuminate\Http\Response
      */
     public function store(Request $request)
     {
       Perawat::create([
             'id_perawat' => $request->id_perawat,
             'id' => $request->id,
             'nama_perawat' => $request->nama_perawat,
             'tgl_lahir' => $request->tgl_lahir,
             'tempat_lahir' => $request->tempat_lahir,
             'umur' => $request->umur,
             'jenis_kelamin' => $request->jenis_kelamin,
             'alamat' => $request->alamat,
             'no_telp' =>$request->no_telp,
                 ]);
         return redirect()->route('perawat.index')->with('message', 'Data berhasil diinput');
     }

     /**
      * Display the specified resource.
      *
      * @param  \App\Perawat  $Perawat
      * @return \Illuminate\Http\Response
      */
     public function show($id)
     {
       $data['data']=Perawat::where('id_perawat',$id)->paginate(6);
       return view('admin.perawat.list_perawat', $data);
     }

     /**
      * Show the form for editing the specified resource.
      *
      * @param  \App\Perawat  $Perawat
      * @return \Illuminate\Http\Response
      */
     public function edit($id)
     {
       $data['data']=Perawat::find($id);
       return view('admin.perawat.formubah_perawat', $data);
     }

     /**
      * Update the specified resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @param  \App\Perawat  $Perawat
      * @return \Illuminate\Http\Response
      */
     public function update(Request $request, $id)
     {
       Perawat::find($id)->update(['nama_perawat'=>$request->nama_perawat]);
       Perawat::find($id)->update(['tgl_lahir'=>$request->tgl_lahir]);
       Perawat::find($id)->update(['tempat_lahir'=>$request->tempat_lahir]);
       Perawat::find($id)->update(['umur'=>$request->umur]);
       Perawat::find($id)->update(['jenis_kelamin'=>$request->jenis_kelamin]);
       Perawat::find($id)->update(['alamat'=>$request->alamat]);
       Perawat::find($id)->update(['no_telp'=>$request->no_telp]);
       return redirect()->route('perawat.index');
     }

     /**
      * Remove the specified resource from storage.
      *
      * @param  \App\Perawat  $Perawat
      * @return \Illuminate\Http\Response
      */
     public function destroy($id)
     {
       $temp=Perawat::find($id)->value('id_perawat');
       Perawat::find($id)->delete();

       return redirect()->route('perawat.show',$temp)->with('message', 'Data berhasil di hapus');
     }
}
