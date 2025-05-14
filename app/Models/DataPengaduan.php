<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPengaduan extends Model
{
    use HasFactory;

    protected $table = 'data_pengaduan';

    protected $fillable =[
        'nama',
        'alamat',
        'email',
        'isi_pesan'
    ];
}
