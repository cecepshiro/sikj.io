<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailDiagnosa extends Model
{
  protected $table='data_detail_diagnosa';
  protected $primaryKey='id_detail_diagnosa';
  public $incrementing =false;
  public $timestamps=false;

    protected $fillable = [
        'id_diagnosa','nama_penyakit','nama_obat','sifat','keterangan',
    ];
}
