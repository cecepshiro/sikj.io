<?php

namespace App\Http\Controllers;

use App\DetailBHP;
use Validator;
use DB;
use Illuminate\Http\Request;

class DetailBHPController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['data']=DetailBHP::get();
        return view('perawat.detail.list_detail', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('perawat.detail.form_detail');
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
        foreach($request->input('bhp') as $key => $value) {
                DetailBHP::create([
                    'id_perawat'=> $request->id_perawat,
                    'no_pengajuan'=> $request->no_pengajuan,
                    'bhp'=>$value,
                   // 'status'=> $request->status,
                    ]);
        }
        return redirect()->route('detailpengajuan.show', $id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DetailBHP  $detailBHP
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cari= $id;
        $data=DetailBHP::where('no_pengajuan', $cari)->get();
        return view('perawat.detail.list_detail', compact('data'))->with('cari', $cari);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DetailBHP  $detailBHP
     * @return \Illuminate\Http\Response
     */
    public function edit(DetailBHP $detailBHP)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DetailBHP  $detailBHP
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $kode= $request->no_pengajuan;
        DetailBHP::find($id)->update(['status'=>$request->status]);
        return redirect()->route('detailpengajuan.show', $kode);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DetailBHP  $detailBHP
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $temp=DB::table('data_detail_pengajuan')->select('no_pengajuan')->where('id_detail_pengajuan', $id)->value('no_pegajuan');
        DetailBHP::find($id)->delete();
        return redirect()->route('detailpengajuan.show',$temp)->with('message', 'Data berhasil di hapus');
    }

    public function createdetail(Request $request)
    {
        $cari = $request->get('search');
        //$data = Diagnosa::where('no_pasien', $cari)->get();
        return view('perawat.detail.form_detail')->with('cari', $cari);
    }

    public function showdetailbhp(Request $request)
    {
        $cari = $request->get('search');
        $data = DetailBHP::where('no_pengajuan', $cari)->get();
        return view('perawat.detail.list_detail', compact('data'))->with('cari', $cari);
    }
}
