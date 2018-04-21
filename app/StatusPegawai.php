<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StatusPegawai extends Model
{
  protected $table='data_status';
  protected $primaryKey='id_status';
  public $incrementing =false;
  public $timestamps=false;

    protected $fillable = [
        'id_status','status','keterangan',
    ];
}
