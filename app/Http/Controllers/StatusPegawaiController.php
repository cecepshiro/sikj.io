<?php

namespace App\Http\Controllers;

use App\StatusPegawai;
use Illuminate\Http\Request;

class StatusPegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['data']=StatusPegawai::get();
        return view('admin.status_pegawai.list_status', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $data['data']=StatusPegawai::get();
      return view('admin.status_pegawai.form_status', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      StatusPegawai::create([
            'id_status' => $request->id_status,
            'status' => $request->status,
            'keterangan' => $request->keterangan,
       ]);
        return redirect()->route('statuspegawai.index')->with('message', 'Data berhasil diinput');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\StatusPegawai  $StatusPegawai
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $data['data']=StatusPegawai::where('id_status',$id)->paginate(6);
      return view('admin.status_pegawai.list_status', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\StatusPegawai  $StatusPegawai
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['data']=StatusPegawai::find($id);
        return view("admin.status_pegawai.formubah_status", $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\StatusPegawai  $StatusPegawai
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      StatusPegawai::find($id)->update(['status'=>$request->status]);
      StatusPegawai::find($id)->update(['keterangan'=>$request->keterangan]);
      return redirect()->route('statuspegawai.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\StatusPegawai  $StatusPegawai
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $temp=StatusPegawai::find($id)->value('id_status');
      StatusPegawai::find($id)->delete();
      return redirect()->route('statuspegawai.show',$temp)->with('message', 'Data berhasil di hapus');
    }
}
