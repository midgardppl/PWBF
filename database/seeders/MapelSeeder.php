<?php

namespace Database\Seeders;

// use App\Http\Models\Mapel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MapelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Mapel::create([
            "idMapel"=>"012345671",
            "namaMapel"=>"Bahasa Indonesia"
        ]);
        Mapel::create([
            "idMapel"=>"012345672",
            "namaMapel"=>"Fisika"
        ]);
        Mapel::create([
            "idMapel"=>"012345673",
            "namaMapel"=>"Matematika"
        ]);
        Mapel::create([
            "idMapel"=>"012345674",
            "namaMapel"=>"Bahasa Inggris"
        ]);
        Mapel::create([
            "idMapel"=>"012345675",
            "namaMapel"=>"Kimia"
        ]);
        Mapel::create([
            "idMapel"=>"012345676",
            "namaMapel"=>"Biologi"
        ]);
        Mapel::create([
            "idMapel"=>"012345677",
            "namaMapel"=>"Matematika Minat"
        ]);
        Mapel::create([
            "idMapel"=>"012345678",
            "namaMapel"=>"Pendidikan Agama"
        ]);
        Mapel::create([
            "idMapel"=>"012345679",
            "namaMapel"=>"Prakarya"
        ]);
        Mapel::create([
            "idMapel"=>"012345680",
            "namaMapel"=>"Seni Budaya"
        ]);
        Mapel::create([
            "idMapel"=>"012345681",
            "namaMapel"=>"Pendidikan Kewarganegaraan"
        ]);
        Mapel::create([
            "idMapel"=>"012345682",
            "namaMapel"=>"Penjaskes"
        ]);
        Mapel::create([
            "idMapel"=>"012345683",
            "namaMapel"=>"Matematika Wajib"
        ]);
        Mapel::create([
            "idMapel"=>"012345684",
            "namaMapel"=>"Sejarah"
        ]);
    }
}
