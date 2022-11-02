<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
            'passGuru'=>'oichwsixnw',
            'alamat' => 'southlake',
            'j_kel' => 'Laki-laki',
            'no_telp' => '08213246638',
            'email' => 'budi@gmail.com'
        ]);
        \App\Models\Guru::factory()->create([
            'NIP' => '098765432102',
            'nama' => 'Nasa',
            'passGuru'=>'sndklwwiw',
            'alamat' => 'praha',
            'j_kel' => 'perempuan',
            'no_telp' => '08213246124',
            'email' => 'nasa@gmail.com'
        ]);
        \App\Models\Guru::factory()->create([
            'NIP' => '098765432103',
            'nama' => 'Welma',
            'passGuru'=>'kqwjdoqjwdoqi',
            'alamat' => 'Moscow',
            'j_kel' => 'Perempuan',
            'no_telp' => '082167273',
            'email' => 'welma@gmail.com'
        ]);
        \App\Models\Guru::factory()->create([
            'NIP' => '098765432104',
            'nama' => 'Hamzah',
            'passGuru'=>'kjhgfdyuwi',
            'alamat' => 'Bekasi',
            'j_kel' => 'Laki-laki',
            'no_telp' => '08213231638',
            'email' => 'hamzah@gmail.com'
        ]);
        \App\Models\Guru::factory()->create([
            'NIP' => '098765432105',
            'nama' => 'Kale',
            'passGuru'=>'njasqid',
            'alamat' => 'Glasgow',
            'j_kel' => 'Laki-laki',
            'no_telp' => '082121416638',
            'email' => ''
        ]);
        \App\Models\Guru::factory()->create([
            'NIP' => '098765432106',
            'nama' => 'Bautista',
            'passGuru'=>'khjgywaqi',
            'alamat' => 'San Francisco',
            'j_kel' => 'Laki-laki',
            'no_telp' => '08213246630',
            'email' => ''
        ]);
        \App\Models\Guru::factory()->create([
            'NIP' => '098765432107',
            'nama' => 'Indira',
            'passGuru'=>'oiuytrew',
            'alamat' => 'Surabaya',
            'j_kel' => 'Perempuan',
            'no_telp' => '0895606089424',
            'email' => 'bimpi@gmail.com'
        ]);
        \App\Models\Guru::factory()->create([
            'NIP' => '098765432108',
            'nama' => 'Santoso',
            'passGuru'=>'273t6937',
            'alamat' => 'Guangzhou',
            'j_kel' => 'Laki-laki',
            'no_telp' => '08276543275',
            'email' => 'sts@gmail.com'
        ]);
        \App\Models\Guru::factory()->create([
            'NIP' => '098765432109',
            'nama' => 'Selvi',
            'passGuru'=>'kajdsoqwj',
            'alamat' => 'London',
            'j_kel' => 'Perempuan',
            'no_telp' => '087654345678',
            'email' => 'selvi@gmail.com'
        ]);
        \App\Models\Guru::factory()->create([
            'NIP' => '098765432110',
            'nama' => 'Aisyah',
            'passGuru'=>'q2ye98y3',
            'alamat' => 'Madinah',
            'j_kel' => 'Perempuan',
            'no_telp' => '086545678921',
            'email' => 'ais@gmail.com'
        ]);
        \App\Models\Guru::factory()->create([
            'NIP' => '098765432111',
            'nama' => 'Vian',
            'passGuru'=>'zkjaodwij',
            'alamat' => 'Beijing',
            'j_kel' => 'Laki-laki',
            'no_telp' => '0821322538',
            'email' => 'vian@gmail.com'
        ]);
        \App\Models\Guru::factory()->create([
            'NIP' => '098765432112',
            'nama' => 'Bastian',
            'passGuru'=>'dnwlkwne',
            'alamat' => 'Amsterdam',
            'j_kel' => 'Laki-laki',
            'no_telp' => '08213209638',
            'email' => 'bst@gmail.com'
        ]);
        \App\Models\Guru::factory()->create([
            'NIP' => '098765432113',
            'nama' => 'Lupita',
            'passGuru'=>'qpwskoqs',
            'alamat' => 'Helsinki',
            'j_kel' => 'Perempuan',
            'no_telp' => '08218766638',
            'email' => 'lupi@gmail.com'
        ]);
        \App\Models\Guru::factory()->create([
            'NIP' => '098765432114',
            'nama' => 'Karim',
            'passGuru'=>'kswjxnqoww',
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

        //SISWA//
        \App\Models\Siswa::factory()->create([
            "NISN"=>"0056780101",
            "namaSiswa"=>"Ahmad",
            "passSiswa"=>"jweuhduwi",
            "tglLahir"=>"2003-09-10",
            "j_kelSiswa"=>"0",
            "alamatSiswa"=>"Jombang",
            "no_telpSiswa"=>"0987654312",
            "statusSiswa"=>"1"
        ]);
        \App\Models\Siswa::factory()->create([
            "NISN"=>"0056780102",
            "namaSiswa"=>"Sinta",
            "passSiswa"=>"oqiwhqd",
            "tglLahir"=>"2003-12-03",
            "j_kelSiswa"=>"1",
            "alamatSiswa"=>"Madiun",
            "no_telpSiswa"=>"0983255312",
            "statusSiswa"=>"1"
        ]);
        \App\Models\Siswa::factory()->create([
            "NISN"=>"0056780103",
            "namaSiswa"=>"Kardi",
            "passSiswa"=>"oqweuwoqieu",
            "tglLahir"=>"2003-02-04",
            "j_kelSiswa"=>"0",
            "alamatSiswa"=>"Surakarta",
            "no_telpSiswa"=>"09876598632",
            "statusSiswa"=>"1"
        ]);
        \App\Models\Siswa::factory()->create([
            "NISN"=>"0056780104",
            "namaSiswa"=>"Nardi",
            "passSiswa"=>"owqihdwi",
            "tglLahir"=>"2003-11-08",
            "j_kelSiswa"=>"0",
            "alamatSiswa"=>"Banten",
            "no_telpSiswa"=>"0823687123",
            "statusSiswa"=>"1"
        ]);
        \App\Models\Siswa::factory()->create([
            "NISN"=>"0056780105",
            "namaSiswa"=>"Kinan",
            "passSiswa"=>"mzxnckjs",
            "tglLahir"=>"2003-05-28",
            "j_kelSiswa"=>"1",
            "alamatSiswa"=>"Cikarang",
            "no_telpSiswa"=>"08902830112",
            "statusSiswa"=>"1"
        ]);
        \App\Models\Siswa::factory()->create([
            "NISN"=>"0056780106",
            "namaSiswa"=>"Dinda",
            "passSiswa"=>"oqwpooiasx",
            "tglLahir"=>"2003-11-22",
            "j_kelSiswa"=>"1",
            "alamatSiswa"=>"Bandung",
            "no_telpSiswa"=>"089293123",
            "statusSiswa"=>"1"
        ]);
        \App\Models\Siswa::factory()->create([
            "NISN"=>"0056780107",
            "namaSiswa"=>"Basuki",
            "passSiswa"=>"asdkjwio",
            "tglLahir"=>"2003-07-05",
            "j_kelSiswa"=>"0",
            "alamatSiswa"=>"Sleman",
            "no_telpSiswa"=>"09872183712",
            "statusSiswa"=>"1"
        ]);
        \App\Models\Siswa::factory()->create([
            "NISN"=>"0056780108",
            "namaSiswa"=>"Winda",
            "passSiswa"=>"jwashuwi",
            "tglLahir"=>"2003-09-30",
            "j_kelSiswa"=>"1",
            "alamatSiswa"=>"Manado",
            "no_telpSiswa"=>"09876289312",
            "statusSiswa"=>"1"
        ]);
        \App\Models\Siswa::factory()->create([
            "NISN"=>"0056780109",
            "namaSiswa"=>"Wildan",
            "passSiswa"=>"jaskbdiuwi",
            "tglLahir"=>"2003-04-23",
            "j_kelSiswa"=>"0",
            "alamatSiswa"=>"Bali",
            "no_telpSiswa"=>"0982394312",
            "statusSiswa"=>"1"
        ]);
        \App\Models\Siswa::factory()->create([
            "NISN"=>"0056780110",
            "namaSiswa"=>"Harbi",
            "passSiswa"=>"asjhduwei",
            "tglLahir"=>"2002-11-08-",
            "j_kelSiswa"=>"1",
            "alamatSiswa"=>"Surabaya",
            "no_telpSiswa"=>"098281122",
            "statusSiswa"=>"1"
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
