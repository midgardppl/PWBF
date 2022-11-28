<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $table='Siswa';

    public function kelas()
     {
        return $this->belongsToMany(Kelas::class, 'kelas_siswa', 'siswa_id', 'kelas_id');
    }
      
        public function mapel()
        {
            return $this->belongsToMany(Mapel::class, 'mapel_siswa', 'siswa_id', 'mapel_id');
        }
}

