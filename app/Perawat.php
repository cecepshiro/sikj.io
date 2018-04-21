<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perawat extends Model
{
  protected $table='data_perawat';
  protected $primaryKey='id_perawat';
  public $incrementing =false;
  public $timestamps=true;

    protected $fillable = [
        'id_perawat','id','nama_perawat','tgl_lahir','tempat_lahir','umur',
        'jenis_kelamin','alamat','no_telp','created_at','updated_at',
    ];
}
