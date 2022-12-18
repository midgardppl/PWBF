<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas_Siswa extends Model
{
    use HasFactory;
    protected $table = 'Kelas_Siswa';
    protected $fillable = ['kelas_id', 'siswa_id'];
    public $timestamps = false;
}
