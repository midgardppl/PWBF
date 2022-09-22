<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Crudcontroller extends Controller
{
    //
    public function tambahdata(){
        $data=array(
            'nama' => Input::get('nama'),
            'alamat' => Input::get('nama'),
            'kelas' => Input::get('nama'),
        );

        DB::table('siswa')->insert($data);
        return Redirect::to('/read')->with('message','berhasil menambah data');
    }
}
