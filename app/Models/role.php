<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    use HasFactory;

    public function siswa(){

            return $this->hasMany(Siswa::class, 'siswa_id');
    }
    public function guru(){

            return $this->hasMany(Guru::class, 'guru_id');
    }
    public function admin(){

            return $this->hasMany(Admin::class, 'admin_id');
    }


}
