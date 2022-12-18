<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru_Mapel extends Model
{
    use HasFactory;
    protected $table='Guru_Mapel';
    protected $fillable=['guru_id','mapel_id'];
    public $timestamps = false;
}
