<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;
    protected $table = 'Guru';
    protected $hidden = ['id'];
    protected $fillable =['NIP','nama','alamat','j_kel','no_telp','email'];

    public function mapel(){
        return $this->belongsTo(Mapel::class,'id');
    }
}
