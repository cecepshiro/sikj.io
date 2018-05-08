<?php

namespace App\Http\Controllers;

use App\JenisPasien;
use Illuminate\Http\Request;

class JenisPasienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['data']=JenisPasien::get();
        return view('admin.jenis_pasien.list_jenis_pasien', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['data']=JenisPasien::get();
        return view('admin.jenis_pasien.form_jenis_pasien', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        JenisPasien::create([
            'id_jenis_pasien' => $request->id_jenis_pasien,
            'jenis_pasien' => $request->jenis_pasien,
                ]);
        return redirect()->route('jenis_pasien.index')->with('message', 'Data berhasil diinput');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\JenisPasien  $jenisPasien
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $data['data']=JenisPasien::where('id_jenis_pasien',$id)->paginate(6);
       return view('admin.jenis_pasien.list_jenis_pasien', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\JenisPasien  $jenisPasien
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $data['data']=JenisPasien::find($id);
       return view('admin.jenis_pasien.formubah_jenis_pasien', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\JenisPasien  $jenisPasien
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        JenisPasien::find($id)->update(['id_jenis_pasien'=>$request->id_jenis_pasien]);
        JenisPasien::find($id)->update(['jenis_pasien'=>$request->jenis_pasien]);
        return redirect()->route('jenis_pasien.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\JenisPasien  $jenisPasien
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $temp=JenisPasien::find($id)->value('id_jenis_pasien');
        JenisPasien::find($id)->delete();
        return redirect()->route('jenis_pasien.index')->with('message', 'Data berhasil di hapus');
    }
}
