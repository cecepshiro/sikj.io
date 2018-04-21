<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PengajuanBHP extends Model
{
    protected $table='data_pengajuan_bhp';
    protected $primaryKey='no_pengajuan';
    public $incrementing =false;
    public $timestamps=true;
        protected $fillable = [
            'no_pengajuan','id_perawat','created_at','updated_at',
        ];
}
