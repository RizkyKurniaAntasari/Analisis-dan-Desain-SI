<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subsidi extends Model
{
    protected $table = 'subsidi';

    protected $fillable = ['nama', 'alamat', 'nik', 'jenis_subsidi', 'jenis_pupuk', 'volume_pupuk'];
}
