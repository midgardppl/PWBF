<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    use HasFactory;
    protected $table = 'Mapel';
    protected $guarded = ['id'];
    protected $fillable = [
        'id_mapel',
        'namaMapel'
    ];

    public function guru(){
        return $this->hasOne(Guru::class, 'id');
    }

    /**
     * The roles that belong to the Mapel
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function siswa()
    {
        return $this->belongsToMany(Siswa::class, 'mapel_siswa', 'mapel_id', 'siswa_id');
    }

}
