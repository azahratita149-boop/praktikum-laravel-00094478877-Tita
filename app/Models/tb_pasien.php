<?php

namespace App\Models;

use Illuminate\database\Eloquent\Model;

class tb_pasien extends Model
{
    protected $fillable = [
        'id_pasien',
        'nama_lengkap',
        'email',
        'no_telepon',
        

    ];
}