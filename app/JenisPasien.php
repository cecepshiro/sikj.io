<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JenisPasien extends Model
{
  protected $table='data_jenis_pasien';
  protected $primaryKey='id_jenis_pasien';
  public $incrementing =false;
  public $timestamps=false;

    protected $fillable = [
        'id_jenis_pasien','jenis_pasien',
    ];
}
