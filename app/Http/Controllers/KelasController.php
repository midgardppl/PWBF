<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;
use App\Models\Mapel;
use App\Models\Guru;
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
        $mapel=Mapel::with(['guru','siswa'])->get();
        $siswa=Siswa::with(['kelas'])->get();
        $guru=Guru::with(['mapel'])->get();
        $gurus=Guru::all();
        $guruCount=$gurus->count();
        $siswas=Siswa::all();
        $siswaCount= $siswas->count();
        $mapels=Mapel::all();
        $mapelCount= $mapels->count();
        $kelas = Kelas::all()->sortBy('namaKelas');
        $kelasCount= $kelas->count();
        $siswa=siswa::with(['mapel'])->get();
        return view('kelas.index', compact('siswaCount','guruCount','mapelCount','kelasCount'),
        ['siswa'=>$siswa,
        'guru'=>$guru,
        'mapel'=>$mapel,
        'kelas'=>$kelas


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
            'namaKelas'=> 'required'
        ]);

        $kelas = new Kelas;
        $kelas->idKelas=$request->idKelas;
        $kelas->namaKelas=$request->namaKelas;
        $kelas->save();
        // $kelas_siswa=new Kelas_Siswa;
        // $kelas_siswa->create([
        //     'kelas_id'=>$kelas->id,
        //     'siswa_id'=>$request->id
        // ]);
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

