<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;
use App\Models\Siswa;
use App\Models\Kelas_Siswa;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kelas=Kelas::with(['siswa'])->get();
        $siswa=Siswa::all();
        return view('kelas.index', [
            'kelas'=>$kelas, 'siswa'=>$siswa
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kelas=Kelas::with(['siswa'])->get();
        $siswa=Siswa::all();
        return view('kelas.create',compact('siswa'));
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
            'idKelas'=>'required',
            'namaMapel'=> 'required'
        ]);

        $kelas = new Kelas;
        $kelas->idKelas=$request->idKelas;
        $kelas->namaKelas=$request->namaKelas;
        $kelas->save();
        $kelas_siswa=new Kelas_Siswa;
        $kelas_siswa->create([
            'kelas_id'=>$kelas->id,
            'siswa_id'=>$request->id([])
        ]);
        return redirect('kelas');
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
        $kelas=Kelas::find($id);
        $siswa=Siswa::all();
        return view('kelas.edit', compact('kelas','siswa'));
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
        $request->validate([
            'idKelas'=>'required',
            'namaKelas'=>'required'
        ]);

        $kelas=Kelas::find($id);
        $kelas->idKelas=$request->get('idKelas');
        $kelas->namaKelas=$request->get('namaKelas');
        $kelas->save();
        $kelas_siswa = new Kelas_Siswa;
        $kelas_siswa->create([
            'kelas_id'=>$kelas->id,
            'siswa_id'=>$request->id
        ]);

        // echo "data masuk";
        return redirect('kelas');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kelas=Kelas::find($id);
        $kelas->delete();

        return redirect('kelas');
    }
}

