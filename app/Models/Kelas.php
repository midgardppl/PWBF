<?php

namespace App\Models;
 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;
    protected $table='Kelas';
    protected $guarded=['id'];
    protected $fillable=['idKelas','namaKelas'];
}
