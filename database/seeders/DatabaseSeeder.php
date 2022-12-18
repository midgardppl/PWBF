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
            'password'=>'oichwsixnw',
            'alamat' => 'southlake',
            'j_kel' => '0',
            'no_telp' => '08213246638',
            'email' => 'budi@gmail.com'
        ]);
        \App\Models\Guru::factory()->create([
            'NIP' => '098765432102',
            'nama' => 'Nasa',
            'password'=>'sndklwwiw',
            'alamat' => 'praha',
            'j_kel' => '1',
            'no_telp' => '08213246124',
            'email' => 'nasa@gmail.com'
        ]);
        \App\Models\Guru::factory()->create([
            'NIP' => '098765432103',
            'nama' => 'Welma',
            'password'=>'kqwjdoqjwdoqi',
            'alamat' => 'Moscow',
            'j_kel' => '1',
            'no_telp' => '082167273',
            'email' => 'welma@gmail.com'
        ]);
        \App\Models\Guru::factory()->create([
            'NIP' => '098765432104',
            'nama' => 'Hamzah',
            'password'=>'kjhgfdyuwi',
            'alamat' => 'Bekasi',
            'j_kel' => '0',
            'no_telp' => '08213231638',
            'email' => 'hamzah@gmail.com'
        ]);
        \App\Models\Guru::factory()->create([
            'NIP' => '098765432105',
            'nama' => 'Kale',
            'password'=>'njasqid',
            'alamat' => 'Glasgow',
            'j_kel' => '0',
            'no_telp' => '082121416638',
            'email' => ''
        ]);
        \App\Models\Guru::factory()->create([
            'NIP' => '098765432106',
            'nama' => 'Bautista',
            'password'=>'khjgywaqi',
            'alamat' => 'San Francisco',
            'j_kel' => '0',
            'no_telp' => '08213246630',
            'email' => ''
        ]);
        \App\Models\Guru::factory()->create([
            'NIP' => '098765432107',
            'nama' => 'Indira',
            'password'=>'oiuytrew',
            'alamat' => 'Surabaya',
            'j_kel' => '1',
            'no_telp' => '0895606089424',
            'email' => 'bimpi@gmail.com'
        ]);
        \App\Models\Guru::factory()->create([
            'NIP' => '098765432108',
            'nama' => 'Santoso',
            'password'=>'273t6937',
            'alamat' => 'Guangzhou',
            'j_kel' => '0',
            'no_telp' => '08276543275',
            'email' => 'sts@gmail.com'
        ]);
        \App\Models\Guru::factory()->create([
            'NIP' => '098765432109',
            'nama' => 'Selvi',
            'password'=>'kajdsoqwj',
            'alamat' => 'London',
            'j_kel' => '1',
            'no_telp' => '087654345678',
            'email' => 'selvi@gmail.com'
        ]);
        \App\Models\Guru::factory()->create([
            'NIP' => '098765432110',
            'nama' => 'Aisyah',
            'password'=>'q2ye98y3',
            'alamat' => 'Madinah',
            'j_kel' => '1',
            'no_telp' => '086545678921',
            'email' => 'ais@gmail.com'
        ]);
        \App\Models\Guru::factory()->create([
            'NIP' => '098765432111',
            'nama' => 'Vian',
            'password'=>'zkjaodwij',
            'alamat' => 'Beijing',
            'j_kel' => '0',
            'no_telp' => '0821322538',
            'email' => 'vian@gmail.com'
        ]);
        \App\Models\Guru::factory()->create([
            'NIP' => '098765432112',
            'nama' => 'Bastian',
            'password'=>'dnwlkwne',
            'alamat' => 'Amsterdam',
            'j_kel' => '0',
            'no_telp' => '08213209638',
            'email' => 'bst@gmail.com'
        ]);
        \App\Models\Guru::factory()->create([
            'NIP' => '098765432113',
            'nama' => 'Lupita',
            'password'=>'qpwskoqs',
            'alamat' => 'Helsinki',
            'j_kel' => '1',
            'no_telp' => '08218766638',
            'email' => 'lupi@gmail.com'
        ]);
        \App\Models\Guru::factory()->create([
            'NIP' => '098765432114',
            'nama' => 'Karim',
            'password'=>'kswjxnqoww',
            'alamat' => 'Jerusalem',
            'j_kel' => '0',
            'no_telp' => '08213986638',
            'email' => 'karim@gmail.com'
        ]);


        //TABEL MAPEL

        \App\Models\Mapel::factory()->create([
            "idMapel"=>"02345671",
            "namaMapel"=>"Bahasa Indonesia",
            // "Guru_ID" => "098765432101"
        ]);
        \App\Models\Mapel::factory()->create([
            "idMapel"=>"02345672",
            "namaMapel"=>"Fisika",
            // "Guru_ID" => "098765432102"
        ]);
        \App\Models\Mapel::factory()->create([
            "idMapel"=>"02345673",
            "namaMapel"=>"Matematika",
            // "Guru_ID" => "098765432103"
        ]);
        \App\Models\Mapel::factory()->create([
            "idMapel"=>"02345674",
            "namaMapel"=>"Bahasa Inggris",
            // "Guru_ID" => "098765432104"
        ]);
        \App\Models\Mapel::factory()->create([
            "idMapel"=>"02345675",
            "namaMapel"=>"Kimia",
            // "Guru_ID" => "098765432105"
        ]);
        \App\Models\Mapel::factory()->create([
            "idMapel"=>"02345676",
            "namaMapel"=>"Biologi",
            // "Guru_ID" => "098765432106"
        ]);
        \App\Models\Mapel::factory()->create([
            "idMapel"=>"02345677",
            "namaMapel"=>"Matematika Minat",
            // "Guru_ID" => "098765432107"
        ]);
        \App\Models\Mapel::factory()->create([
            "idMapel"=>"02345678",
            "namaMapel"=>"Pendidikan Agama",
            // "Guru_ID" => "098765432108"
        ]);
        \App\Models\Mapel::factory()->create([
            "idMapel"=>"02345679",
            "namaMapel"=>"Prakarya",
            // "Guru_ID" => "098765432109"
        ]);
        \App\Models\Mapel::factory()->create([
            "idMapel"=>"02345680",
            "namaMapel"=>"Seni Budaya",
            // "Guru_ID" => "098765432110"
        ]);
        \App\Models\Mapel::factory()->create([
            "idMapel"=>"02345681",
            "namaMapel"=>"Pendidikan Kewarganegaraan",
            // "Guru_ID" => "098765432111"
        ]);
        \App\Models\Mapel::factory()->create([
            "idMapel"=>"02345682",
            "namaMapel"=>"Penjaskes",
            // "Guru_ID" => "098765432112"
        ]);
        \App\Models\Mapel::factory()->create([
            "idMapel"=>"02345683",
            "namaMapel"=>"Matematika Wajib",
            // "Guru_ID" => "098765432113"
        ]);
        \App\Models\Mapel::factory()->create([
            "idMapel"=>"02345684",
            "namaMapel"=>"Sejarah",
            // "Guru_ID" => "098765432114"
        ]);

        //SISWA//
        \App\Models\Siswa::factory()->create([
            "NISN"=>"0056780101",
            "namaSiswa"=>"Ahmad",
            "password"=>"jweuhduwi",
            "tglLahir"=>"2003-09-10",
            "j_kelSiswa"=>"0",
            "alamatSiswa"=>"Jombang",
            "no_telpSiswa"=>"0987654312",
            "email"=>"ahmad@gmail.com",
            "statusSiswa"=>"1"
        ]);
        \App\Models\Siswa::factory()->create([
            "NISN"=>"0056780102",
            "namaSiswa"=>"Sinta",
            "password"=>"oqiwhqd",
            "tglLahir"=>"2003-12-03",
            "j_kelSiswa"=>"1",
            "alamatSiswa"=>"Madiun",
            "no_telpSiswa"=>"0983255312",
            "email"=>"sinta@gmail.com",
            "statusSiswa"=>"1"
        ]);
        \App\Models\Siswa::factory()->create([
            "NISN"=>"0056780103",
            "namaSiswa"=>"Kardi",
            "password"=>"oqweuwoqieu",
            "tglLahir"=>"2003-02-04",
            "j_kelSiswa"=>"0",
            "alamatSiswa"=>"Surakarta",
            "no_telpSiswa"=>"09876598632",
            "email"=>"kardi@gmail.com",
            "statusSiswa"=>"1"
        ]);
        \App\Models\Siswa::factory()->create([
            "NISN"=>"0056780104",
            "namaSiswa"=>"Nardi",
            "password"=>"owqihdwi",
            "tglLahir"=>"2003-11-08",
            "j_kelSiswa"=>"0",
            "alamatSiswa"=>"Banten",
            "no_telpSiswa"=>"0823687123",
            "email"=>"nardi@gmail.com",
            "statusSiswa"=>"1"
        ]);
        \App\Models\Siswa::factory()->create([
            "NISN"=>"0056780105",
            "namaSiswa"=>"Kinan",
            "password"=>"mzxnckjs",
            "tglLahir"=>"2003-05-28",
            "j_kelSiswa"=>"1",
            "alamatSiswa"=>"Cikarang",
            "no_telpSiswa"=>"08902830112",
            "email"=>"kinan@gmail.com",
            "statusSiswa"=>"1"
        ]);
        \App\Models\Siswa::factory()->create([
            "NISN"=>"0056780106",
            "namaSiswa"=>"Dinda",
            "password"=>"oqwpooiasx",
            "tglLahir"=>"2003-11-22",
            "j_kelSiswa"=>"1",
            "alamatSiswa"=>"Bandung",
            "no_telpSiswa"=>"089293123",
            "email"=>"dinda@gmail.com",
            "statusSiswa"=>"1"
        ]);
        \App\Models\Siswa::factory()->create([
            "NISN"=>"0056780107",
            "namaSiswa"=>"Basuki",
            "password"=>"asdkjwio",
            "tglLahir"=>"2003-07-05",
            "j_kelSiswa"=>"0",
            "alamatSiswa"=>"Sleman",
            "no_telpSiswa"=>"09872183712",
            "email"=>"basuki@gmail.com",
            "statusSiswa"=>"1"
        ]);
        \App\Models\Siswa::factory()->create([
            "NISN"=>"0056780108",
            "namaSiswa"=>"Winda",
            "password"=>"jwashuwi",
            "tglLahir"=>"2003-09-30",
            "j_kelSiswa"=>"1",
            "alamatSiswa"=>"Manado",
            "no_telpSiswa"=>"09876289312",
            "email"=>"winda@gmail.com",
            "statusSiswa"=>"1"
        ]);
        \App\Models\Siswa::factory()->create([
            "NISN"=>"0056780109",
            "namaSiswa"=>"Wildan",
            "password"=>"jaskbdiuwi",
            "tglLahir"=>"2003-04-23",
            "j_kelSiswa"=>"0",
            "alamatSiswa"=>"Bali",
            "no_telpSiswa"=>"0982394312",
            "email"=>"wildan@gmail.com",
            "statusSiswa"=>"1"
        ]);
        \App\Models\Siswa::factory()->create([
            "NISN"=>"0056780110",
            "namaSiswa"=>"Harbi",
            "password"=>"asjhduwei",
            "tglLahir"=>"2002-11-08-",
            "j_kelSiswa"=>"1",
            "alamatSiswa"=>"Surabaya",
            "no_telpSiswa"=>"098281122",
            "email"=>"harbi@gmail.com",
            "statusSiswa"=>"1"
        ]);

        \App\Models\Kelas::factory()->create([
            "idKelas"=>"04321",
            "namaKelas"=>"IPA 1"
        ]);
        \App\Models\Kelas::factory()->create([
            "idKelas"=>"04322",
            "namaKelas"=>"IPA 2"
        ]);
        \App\Models\Kelas::factory()->create([
            "idKelas"=>"04323",
            "namaKelas"=>"IPA 3"
        ]);
        \App\Models\Kelas::factory()->create([
            "idKelas"=>"04324",
            "namaKelas"=>"IPA 4"
        ]);
        \App\Models\Kelas::factory()->create([
            "idKelas"=>"04325",
            "namaKelas"=>"IPA 5"
        ]);
        \App\Models\Kelas::factory()->create([
            "idKelas"=>"04326",
            "namaKelas"=>"IPS 1"
        ]);
        \App\Models\Kelas::factory()->create([
            "idKelas"=>"04327",
            "namaKelas"=>"IPS 2"
        ]);

        \App\Models\Admin::factory()->create([
            "nama"=>"wawan",
            "email"=>"wawan@gmail.com",
            "password"=>"jsahkjhda"
        ]);
        \App\Models\Admin::factory()->create([
            "nama"=>"fardan",
            "email"=>"fardan@gmail.com",
            "password"=>"enokjw"
        ]);



        // \App\Models\Guru::factory()->create([
        //     'NIP' => '098765432115',
        //     'nama' => 'Jafar',
        //     'alamat' => 'Madura',
        //     'j_kel' => '0',
        //     'no_telp' => '08298246638',
        //     'email' => 'jafar@gmail.com'
        // ]);
        // \App\Models\Guru::factory()->create([
        //     'NIP' => '098765432116',
        //     'nama' => 'Hilda',
        //     'alamat' => 'Koln',
        //     'j_kel' => '1',
        //     'no_telp' => '0887646638',
        //     'email' => 'hilda@gmail.com'
        // ]);
        // \App\Models\Guru::factory()->create([
        //     'NIP' => '098765432117',
        //     'nama' => '',
        //     'alamat' => 'southlake',
        //     'j_kel' => '0',
        //     'no_telp' => '08213246638',
        //     'email' => 'budi@gmail.com'
        // ]);
        // \App\Models\Guru::factory()->create([
        //     'NIP' => '098765432101',
        //     'nama' => 'Budi',
        //     'alamat' => 'southlake',
        //     'j_kel' => '0',
        //     'no_telp' => '08213246638',
        //     'email' => 'budi@gmail.com'
        // ]);
        // \App\Models\Guru::factory()->create([
        //     'NIP' => '098765432101',
        //     'nama' => 'Budi',
        //     'alamat' => 'southlake',
        //     'j_kel' => '0',
        //     'no_telp' => '08213246638',
        //     'email' => 'budi@gmail.com'
        // ]);
        // \App\Models\Guru::factory()->create([
        //     'NIP' => '098765432101',
        //     'nama' => 'Budi',
        //     'alamat' => 'southlake',
        //     'j_kel' => '0',
        //     'no_telp' => '08213246638',
        //     'email' => 'budi@gmail.com'
        // ]);
        // \App\Models\Guru::factory()->create([
        //     'NIP' => '098765432101',
        //     'nama' => 'Budi',
        //     'alamat' => 'southlake',
        //     'j_kel' => '0',
        //     'no_telp' => '08213246638',
        //     'email' => 'budi@gmail.com'
        // ]);
        // $this->call([
        //     MapelSeeder::class
        // ]);
    }
}
