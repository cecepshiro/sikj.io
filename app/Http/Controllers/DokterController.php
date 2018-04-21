<?php

namespace App\Http\Controllers;
use App\Dokter;
use DB;
use Illuminate\Http\Request;

class DokterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $data['data']=Dokter::get();
      return view('admin.dokter.list_dokter', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $data['data']=Dokter::get();
      return view('admin.dokter.form_dokter', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      Dokter::create([
            'nid' => $request->nid,
            'id' => $request->id,
            'nama_dokter' => $request->nama_dokter,
            'tgl_lahir' => $request->tgl_lahir,
            'tempat_lahir' => $request->tempat_lahir,
            'umur' => $request->umur,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat' => $request->alamat,
            'no_telp' =>$request->no_telp,
            'spesialis' =>$request->spesialis,

                ]);
        return redirect()->route('dokter.index')->with('message', 'Data berhasil diinput');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Dokter  $dokter
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $data['data']=Dokter::where('nid',$id)->paginate(6);
      return view('admin.dokter.list_dokter', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dokter  $dokter
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $data['data']=Dokter::find($id);
      return view('admin.dokter.formubah_dokter', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dokter  $dokter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      Dokter::find($id)->update(['nama_dokter'=>$request->nama_dokter]);
      Dokter::find($id)->update(['tgl_lahir'=>$request->tgl_lahir]);
      Dokter::find($id)->update(['tempat_lahir'=>$request->tempat_lahir]);
      Dokter::find($id)->update(['umur'=>$request->umur]);
      Dokter::find($id)->update(['jenis_kelamin'=>$request->jenis_kelamin]);
      Dokter::find($id)->update(['alamat'=>$request->alamat]);
      Dokter::find($id)->update(['no_telp'=>$request->no_telp]);
      Dokter::find($id)->update(['spesialis'=>$request->spesialis]);
      return redirect()->route('dokter.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dokter  $dokter
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $temp=Dokter::find($id)->value('nid');
      Dokter::find($id)->delete();
      return redirect()->route('dokter.show',$temp)->with('message', 'Data berhasil di hapus');
    }
}
