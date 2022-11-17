<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Guru_Mapel;
use App\Models\Mapel;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $guru=Guru::with(['mapel'])->get();
        return view('guru.index',
        ['guru'=>$guru

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $guru=Guru::with(['Mapel'])->get();
        $mapel=Mapel::all();
        return view('guru.create', compact('mapel'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'NIP'=>'required',
            'nama'=>'required',
            'passmapel'=>'required',
            'alamat'=>'required',
            'j_kel'=>'required',
            'no_telp'=>'required'
        ]);

        // mapel::create($request->all());
        $guru = new Guru;
        $guru->NIP=$request->NIP;
        $guru->nama=$request->nama;
        $guru->passGuru=$request->passGuru;
        $guru->alamat=$request->alamat;
        $guru->j_kel=$request->j_kel;
        $guru->no_telp=$request->no_telp;
        $guru->email=$request->email;
        $guru->save();
        $guru_mapel = new Guru_Mapel;
        $guru_mapel->create([
            'guru_id'=>$guru->id,
            'mapel_id'=>$request->id
        ]);


        echo "data berhasil masuk";

        return redirect('guru')->with('success', 'Data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
