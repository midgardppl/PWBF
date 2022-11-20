<?php

namespace App\Http\Controllers;

use App\Models\Mapel;
use App\Models\Guru;
use App\Models\Guru_Mapel;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MapelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mapel=Mapel::with(['guru','siswa'])->get();
        return view('mapel.index', compact('mapel'),
        ['mapel'=>$mapel

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mapel=Mapel::with(['guru','siswa'])->get();
        $guru=Guru::all();
        return view('mapel.create', compact('guru'));


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
            'idMapel'=>'required',
            'namaMapel'=>'required'
        ]);

        $mapel = new Mapel;
        // $mapel->id=$request->id;
        $mapel->idMapel=$request->idMapel;
        $mapel->namaMapel=$request->namaMapel;
        $mapel->save();
        $guru_mapel = new Guru_Mapel;
        $guru_mapel->create([
            'guru_id'=>$request->id,
            'mapel_id'=>$mapel->id
        ]);


        return redirect('mapel')->with('success', 'Data berhasil ditambah');
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
        $mapel = Mapel::find($id);
        $guru=Guru::all();
        return view('mapel.edit',compact('guru','mapel'));
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
        
        // validate
        // read more on validation at http://laravel.com/docs/validation
        // $mapel = array(
        //     'namaMapel'       => 'required',
        // );
        // $validator = Mapel::make(Mapel::all(), $mapel);
        $request->validate([
            'namaMapel'=>'required'
        ]);

        $mapel=Mapel::find($id);
        $mapel->namaMapel=$request->get('namaMapel');
        $mapel->save();
        $guru_mapel=new Guru_Mapel;
        $guru_mapel->create([
            'guru_id'=>$request->id,
            'mapel_id'=>$mapel->id
        ]);


        return redirect('mapel');
        // process the login
        /*
        if ($validator->fails()) {
            return redirect ('mapels/' . $id . '/edit')
                ->withErrors($validator);
        } else {
            // store
            $mapel = Mapel::find($id);
            $mapel->namaMapel       = Mapel::get('namaMapel');
            $mapel->save();*/

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    function destroy($id)
    {
        $mapel=Mapel::find($id);
        $mapel->delete();

        return redirect('mapel');
    }
}

