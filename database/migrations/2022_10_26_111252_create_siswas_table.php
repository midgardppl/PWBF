<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa', function (Blueprint $table) {
            $table->id();
            $table->char('NISN',10)->unique();
            $table->string('namaSiswa');
            $table->string('passSiswa')->unique();
            $table->date('tglLahir');
            $table->boolean('j_kelSiswa');
            $table->string('alamatSiswa');
            $table->string('no_telpSiswa');
            $table->boolean('statusSiswa');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siswa');
    }
};
