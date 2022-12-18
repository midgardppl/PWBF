<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Guru extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $guard= "guru";
    protected $table = 'Guru';
    protected $hidden = ['id'];
    protected $fillable =['NIP','nama','alamat','password','j_kel','no_telp','email'];


    public function mapel()
    {
        return $this->belongsToMany(Mapel::class, 'guru_mapel', 'guru_id', 'mapel_id');
    }


    public function role()
    {
        return $this->belongsTo(role::class, 'role_id');
    }
}
