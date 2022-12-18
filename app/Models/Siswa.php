<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Siswa extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $guard= "siswa";

    protected $table='Siswa';
    protected $fillable=[
        'NISN',
        'namaSiswa',
        'alamatSiswa',
        'tglLahir',
        'j_kelSiswa',
        'no_telpSiswa',
        'email',
        'password'
    ];

    public function kelas()
     {
        return $this->belongsToMany(Kelas::class, 'kelas_siswa', 'siswa_id', 'kelas_id');
    }

        public function mapel()
        {
            return $this->belongsToMany(Mapel::class, 'mapel_siswa', 'siswa_id', 'mapel_id');
        }

        public function role()
    {
        return $this->belongsTo(role::class, 'role_id');
    }
}
