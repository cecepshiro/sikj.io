<?php

namespace App\Http\Controllers;

use App\PengajuanBHP;
use App\DetailBHP;
use Illuminate\Http\Request;

class PengajuanBHPController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['data']=PengajuanBHP::get();
        return view('perawat.bhp.list_bhp', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('perawat.bhp.form_bhp');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id= $request->no_pengajuan;
        PengajuanBHP::create([
            //'no_pasien' => $request->no_pasien,
            'no_pengajuan' => $request->no_pengajuan,
            'id_perawat'=>$request->id_perawat,
                ]);
        return redirect()->route('masterpengajuan.show', $id)->with('message', 'Data berhasil diinput');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PengajuanBHP  $pengajuanBHP
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cari= $id;
        //$cari2= $id;
        $data=PengajuanBHP::where('no_pengajuan', $cari)->get();
        //$data2=PengajuanBHP::where('no_pengajuan', $cari2)->value('no_pengajuan');
        return view('perawat.bhp.list_bhp', compact('data'))->with('cari', $cari);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PengajuanBHP  $pengajuanBHP
     * @return \Illuminate\Http\Response
     */
    public function edit(PengajuanBHP $pengajuanBHP)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PengajuanBHP  $pengajuanBHP
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PengajuanBHP $pengajuanBHP)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PengajuanBHP  $pengajuanBHP
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $temp=PengajuanBHP::find($id)->value('no_pengajuan');
        PengajuanBHP::find($id)->delete();
        return redirect()->route('masterpengajuan.index')->with('message', 'Data berhasil di hapus');
    }
}
