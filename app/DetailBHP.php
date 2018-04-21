<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailBHP extends Model
{
    protected $table='data_detail_pengajuan';
    protected $primaryKey='id_detail_pengajuan';
    public $incrementing =false;
    public $timestamps=false;
        protected $fillable = [
            'no_pengajuan','id_perawat','bhp','status',
        ];
}
