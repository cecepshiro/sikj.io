<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
  protected $table='data_pasien';
  protected $primaryKey='no_pasien';
  public $incrementing =false;
  public $timestamps=true;

    protected $fillable = [
       'nama_pasien','id_jenis_pasien','tgl_lahir','tempat_lahir','umur',
        'jenis_kelamin','alamat','no_telp','nip','created_at','updated_at',
    ];
}
