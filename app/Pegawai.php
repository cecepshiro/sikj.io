<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
  protected $table='data_pegawai';
  protected $primaryKey='nip';
  public $incrementing =false;
  public $timestamps=true;

    protected $fillable = [
        'nip','id','nama_pegawai','id_status','tgl_lahir','tempat_lahir','umur',
        'jenis_kelamin','alamat','no_telp','created_at','updated_at',
    ];
}
