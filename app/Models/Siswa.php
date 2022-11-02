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

    }
        /**
         * The roles that belong to the Siswa
         *
         * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
         */
        public function mapel(): BelongsToMany
        {
            return $this->belongsToMany(Mapel::class, 'mapel_siswa', 'siswa_id', 'mapel_id');
        }
}

