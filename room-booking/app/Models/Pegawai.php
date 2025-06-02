<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $table = 'unit_pegawai';

    protected $fillable = ['nip', 'nama', 'unit_kerja_id']; 
}
