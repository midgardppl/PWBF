<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;
 
class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('guru.index', [
            "guru"=> Guru::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('guru.create');
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
            'NIP'=>'required|min:12|max:12',
            'nama'=>'required',
            'alamat'=>'required',
            'j_kel'=>'required',
            'no_telp'=>'required',
            'email'=>'required',
        ]);

        $guru = new Guru;
        $guru->NIP=$request->NIP;
        $guru->nama=$request->nama;
        $guru->alamat=$request->alamat;
        $guru->j_kel=$request->j_kel;
        $guru->no_telp=$request->no_telp;
        $guru->email=$request->email;
        $guru->save();

        return to_route('guru.index')->with('success', 'Data berhasil ditambah');
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
