<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});
Route::group(['middleware' => 'web'], function(){
  //redirect to login
  Route::auth();
});

Route::group(['middleware' => ['web','auth']], function(){
  //redirect to login
  Route::get('/home', 'HomeController@index')->name('home');
  Route::get('/', function(){
    if(Auth::user()->hak_akses==1){
      return view('pegawai.home');
    }elseif(Auth::user()->hak_akses==2){
      return view('perawat.home');
    }elseif(Auth::user()->hak_akses==3){
      return view('dokter.home');
    }elseif(Auth::user()->hak_akses==0){
      return view('admin.home');
    }
  });
});

Route::get('hak_akses', ['middleware' => ['web','auth','hak_akses'],function () {
    return view('welcome');
}]);
//CRUD Master
//Pasien route
Route::resource('pasien','PasienController');
//Jenis Pasien route
Route::resource('jenis_pasien','JenisPasienController');
//Pegawai route
Route::resource('pegawai','PegawaiController');
//Dokter route
Route::resource('dokter','DokterController');
//Perawat route
Route::resource('perawat','PerawatController');
//Status Pegawai
Route::resource('statuspegawai','StatusPegawaiController');
//DiagnosaController
Route::resource('diagnosa','DiagnosaController');
//seleksi kode pasien pada add diagnosa
Route::get('showdetail','PasienController@showdetail');
//seleksi kode pasien pada form diagnosa
Route::get('showid','DiagnosaController@showdetail');
//DetailDiagnosa controller
Route::resource('detaildiagnosa','DetailDiagnosaController');
//seleksi kode pasien pada form detail diagnosa
Route::get('showformdetail','DetailDiagnosaController@showformdetail');
//Rekmed controller
Route::resource('rekmed','RekamMedisController');
//LogOperasi controller
Route::resource('logop','LogOperasiController');
//Pengajuan BHP controller
Route::resource('masterpengajuan','PengajuanBHPController');
//Detail BHP controller
Route::resource('detailpengajuan','DetailBHPController');
//Detail create BHP
Route::get('createdetail','DetailBHPController@createdetail');
//Show detail perawat who's makes BHP
Route::get('showdetailbhp','DetailBHPController@showdetailbhp');