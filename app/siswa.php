<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    protected $fillable = ['nama_lengkap','kelas','usia','alamat'];
}
