<?php

namespace App\Http\Controllers;
use App\Models\Siswa;
use App\Models\Guru;
use App\Models\Mapel;
use App\Models\Kelas;
use App\Models\Kelas_Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
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
        $kelas=Kelas::all();
        $kelasCount= $kelas->count();
        $siswa=siswa::with(['mapel'])->get();
        return view('siswa.index', compact('siswaCount','guruCount','mapelCount','kelasCount'),
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
        //
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
            'NISN'=>'required',
            'namaSiswa'=>'required',
            'alamatSiswa'=>'required',
            'tglLahir'=>'required',
            'j_kelSiswa'=>'required',
            'no_telpSiswa'=>'required',
            'email'=>'required',
            'password'=>'required',
        ]);

        $siswa = new Siswa;
        $siswa->NISN=$request->NISN;
        $siswa->namaSiswa=$request->namaSiswa;
        $siswa->alamatSiswa=$request->alamatSiswa;
        $siswa->tglLahir=$request->tglLahir;
        $siswa->j_kelSiswa=$request->j_kelSiswa;
        $siswa->no_telpSiswa=$request->no_telpSiswa;
        $siswa->email=$request->email;
        $siswa->password=$request->password;
        $siswa->save();

        $kelas_siswa = new Kelas_Siswa;
        $kelas_siswa->create([
            'siswa_id'=>$siswa->id,
            'kelas_id'=>$request->id
        ]);

        return redirect('siswa')->with('success', 'Data berhasil ditambah');

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
        $siswa = Siswa::find($id);
        return view('siswa.edit',compact('siswa','mapel'));
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
            'namaSiswa'=>'required',
            'alamatSiswa'=>'required',
            'no_telpSiswa'=>'required',
            'email'=>'required',
            'password'=>'required',
        ]);

        $siswa=Siswa::find($id);
        $siswa->namaSiswa=$request->get('namaSiswa');
        $siswa->alamatSiswa=$request->get('alamatSiswa');
        $siswa->no_telpSiswa=$request->get('no_telpSiswa');
        $siswa->email=$request->get('email');
        $siswa->password=$request->get('password');
        $siswa->save();
        $kelas_siswa=new Kelas_Siswa;
        $kelas_siswa->create([
            'siswa_id'=>$siswa->id,
            'kelas_id'=>$request->id
        ]);

        return redirect('siswa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $siswa=Siswa::find($id);
        $siswa->delete();

        return redirect('siswa');
    }
}
