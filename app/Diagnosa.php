<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diagnosa extends Model
{
  protected $table='data_diagnosa';
  protected $primaryKey='id_diagnosa';
  public $incrementing =false;
  public $timestamps=true;

    protected $fillable = [
        'id_diagnosa','no_pasien','nid','id_perawat','gejala','created_at','updated_at',
    ];
}
