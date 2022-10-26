<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// use App\Http\Models\Mapel;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\Guru::factory()->create([
            'NIP' => '098765432101',
            'nama' => 'Budi',
            'alamat' => 'southlake',
            'j_kel' => 'Laki-laki',
            'no_telp' => '08213246638',
            'email' => 'budi@gmail.com'
        ]);
        \App\Models\Guru::factory()->create([
            'NIP' => '098765432102',
            'nama' => 'Nasa',
            'alamat' => 'praha',
            'j_kel' => 'perempuan',
            'no_telp' => '08213246124',
            'email' => 'nasa@gmail.com'
        ]);
        \App\Models\Guru::factory()->create([
            'NIP' => '098765432103',
            'nama' => 'Welma',
            'alamat' => 'Moscow',
            'j_kel' => 'Perempuan',
            'no_telp' => '082167273',
            'email' => 'welma@gmail.com'
        ]);
        \App\Models\Guru::factory()->create([
            'NIP' => '098765432104',
            'nama' => 'Hamzah',
            'alamat' => 'Bekasi',
            'j_kel' => 'Laki-laki',
            'no_telp' => '08213231638',
            'email' => 'hamzah@gmail.com'
        ]);
        \App\Models\Guru::factory()->create([
            'NIP' => '098765432105',
            'nama' => 'Kale',
            'alamat' => 'Glasgow',
            'j_kel' => 'Laki-laki',
            'no_telp' => '082121416638',
            'email' => ''
        ]);
        \App\Models\Guru::factory()->create([
            'NIP' => '098765432106',
            'nama' => 'Bautista',
            'alamat' => 'San Francisco',
            'j_kel' => 'Laki-laki',
            'no_telp' => '08213246630',
            'email' => ''
        ]);
        \App\Models\Guru::factory()->create([
            'NIP' => '098765432107',
            'nama' => 'Indira',
            'alamat' => 'Surabaya',
            'j_kel' => 'Perempuan',
            'no_telp' => '0895606089424',
            'email' => 'bimpi@gmail.com'
        ]);
        \App\Models\Guru::factory()->create([
            'NIP' => '098765432108',
            'nama' => 'Santoso',
            'alamat' => 'Guangzhou',
            'j_kel' => 'Laki-laki',
            'no_telp' => '08276543275',
            'email' => 'sts@gmail.com'
        ]);
        \App\Models\Guru::factory()->create([
            'NIP' => '098765432109',
            'nama' => 'Selvi',
            'alamat' => 'London',
            'j_kel' => 'Perempuan',
            'no_telp' => '087654345678',
            'email' => 'selvi@gmail.com'
        ]);
        \App\Models\Guru::factory()->create([
            'NIP' => '098765432110',
            'nama' => 'Aisyah',
            'alamat' => 'Madinah',
            'j_kel' => 'Perempuan',
            'no_telp' => '086545678921',
            'email' => 'ais@gmail.com'
        ]);
        \App\Models\Guru::factory()->create([
            'NIP' => '098765432111',
            'nama' => 'Vian',
            'alamat' => 'Beijing',
            'j_kel' => 'Laki-laki',
            'no_telp' => '0821322538',
            'email' => 'vian@gmail.com'
        ]);
        \App\Models\Guru::factory()->create([
            'NIP' => '098765432112',
            'nama' => 'Bastian',
            'alamat' => 'Amsterdam',
            'j_kel' => 'Laki-laki',
            'no_telp' => '08213209638',
            'email' => 'bst@gmail.com'
        ]);
        \App\Models\Guru::factory()->create([
            'NIP' => '098765432113',
            'nama' => 'Lupita',
            'alamat' => 'Helsinki',
            'j_kel' => 'Perempuan',
            'no_telp' => '08218766638',
            'email' => 'lupi@gmail.com'
        ]);
        \App\Models\Guru::factory()->create([
            'NIP' => '098765432114',
            'nama' => 'Karim',
            'alamat' => 'Jerusalem',
            'j_kel' => 'Laki-laki',
            'no_telp' => '08213986638',
            'email' => 'karim@gmail.com'
        ]);
 

        //TABEL MAPEL

        \App\Models\Mapel::factory()->create([
            "idMapel"=>"02345671",
            "namaMapel"=>"Bahasa Indonesia",
            "Guru_ID" => "098765432101"
        ]);
        \App\Models\Mapel::factory()->create([
            "idMapel"=>"02345672",
            "namaMapel"=>"Fisika",
            "Guru_ID" => "098765432102"
        ]);
        \App\Models\Mapel::factory()->create([
            "idMapel"=>"02345673",
            "namaMapel"=>"Matematika",
            "Guru_ID" => "098765432103"
        ]);
        \App\Models\Mapel::factory()->create([
            "idMapel"=>"02345674",
            "namaMapel"=>"Bahasa Inggris",
            "Guru_ID" => "098765432104"
        ]);
        \App\Models\Mapel::factory()->create([
            "idMapel"=>"02345675",
            "namaMapel"=>"Kimia",
            "Guru_ID" => "098765432105"
        ]);
        \App\Models\Mapel::factory()->create([
            "idMapel"=>"02345676",
            "namaMapel"=>"Biologi",
            "Guru_ID" => "098765432106"
        ]);
        \App\Models\Mapel::factory()->create([
            "idMapel"=>"02345677",
            "namaMapel"=>"Matematika Minat",
            "Guru_ID" => "098765432107"
        ]);
        \App\Models\Mapel::factory()->create([
            "idMapel"=>"02345678",
            "namaMapel"=>"Pendidikan Agama",
            "Guru_ID" => "098765432108"
        ]);
        \App\Models\Mapel::factory()->create([
            "idMapel"=>"02345679",
            "namaMapel"=>"Prakarya",
            "Guru_ID" => "098765432109"
        ]);
        \App\Models\Mapel::factory()->create([
            "idMapel"=>"02345680",
            "namaMapel"=>"Seni Budaya",
            "Guru_ID" => "098765432110"
        ]);
        \App\Models\Mapel::factory()->create([
            "idMapel"=>"02345681",
            "namaMapel"=>"Pendidikan Kewarganegaraan",
            "Guru_ID" => "098765432111"
        ]);
        \App\Models\Mapel::factory()->create([
            "idMapel"=>"02345682",
            "namaMapel"=>"Penjaskes",
            "Guru_ID" => "098765432112"
        ]);
        \App\Models\Mapel::factory()->create([
            "idMapel"=>"02345683",
            "namaMapel"=>"Matematika Wajib",
            "Guru_ID" => "098765432113"
        ]);
        \App\Models\Mapel::factory()->create([
            "idMapel"=>"02345684",
            "namaMapel"=>"Sejarah",
            "Guru_ID" => "098765432114"
        ]);






        
        // \App\Models\Guru::factory()->create([
        //     'NIP' => '098765432115',
        //     'nama' => 'Jafar',
        //     'alamat' => 'Madura',
        //     'j_kel' => 'Laki-laki',
        //     'no_telp' => '08298246638',
        //     'email' => 'jafar@gmail.com'
        // ]);
        // \App\Models\Guru::factory()->create([
        //     'NIP' => '098765432116',
        //     'nama' => 'Hilda',
        //     'alamat' => 'Koln',
        //     'j_kel' => 'Perempuan',
        //     'no_telp' => '0887646638',
        //     'email' => 'hilda@gmail.com'
        // ]);
        // \App\Models\Guru::factory()->create([
        //     'NIP' => '098765432117',
        //     'nama' => '',
        //     'alamat' => 'southlake',
        //     'j_kel' => 'Laki-laki',
        //     'no_telp' => '08213246638',
        //     'email' => 'budi@gmail.com'
        // ]);
        // \App\Models\Guru::factory()->create([
        //     'NIP' => '098765432101',
        //     'nama' => 'Budi',
        //     'alamat' => 'southlake',
        //     'j_kel' => 'Laki-laki',
        //     'no_telp' => '08213246638',
        //     'email' => 'budi@gmail.com'
        // ]);
        // \App\Models\Guru::factory()->create([
        //     'NIP' => '098765432101',
        //     'nama' => 'Budi',
        //     'alamat' => 'southlake',
        //     'j_kel' => 'Laki-laki',
        //     'no_telp' => '08213246638',
        //     'email' => 'budi@gmail.com'
        // ]);
        // \App\Models\Guru::factory()->create([
        //     'NIP' => '098765432101',
        //     'nama' => 'Budi',
        //     'alamat' => 'southlake',
        //     'j_kel' => 'Laki-laki',
        //     'no_telp' => '08213246638',
        //     'email' => 'budi@gmail.com'
        // ]);
        // \App\Models\Guru::factory()->create([
        //     'NIP' => '098765432101',
        //     'nama' => 'Budi',
        //     'alamat' => 'southlake',
        //     'j_kel' => 'Laki-laki',
        //     'no_telp' => '08213246638',
        //     'email' => 'budi@gmail.com'
        // ]);
        // $this->call([
        //     MapelSeeder::class
        // ]);
    }
}
