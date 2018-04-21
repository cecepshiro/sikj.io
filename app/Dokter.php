<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
  protected $table='data_dokter';
  protected $primaryKey='nid';
  public $incrementing =false;
  public $timestamps=true;

    protected $fillable = [
        'nid','id','nama_dokter','tgl_lahir','tempat_lahir','umur',
        'jenis_kelamin','alamat','no_telp','spesialis','created_at','updated_at',
    ];
}
