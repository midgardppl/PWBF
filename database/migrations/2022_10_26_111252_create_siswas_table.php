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
            $table->string('password')->unique();
            $table->date('tglLahir');
            $table->boolean('j_kelSiswa');
            $table->string('alamatSiswa');
            $table->string('no_telpSiswa');
            $table->string('email');
            $table->unsignedBigInteger('role_id')->default("3");
            $table->boolean('statusSiswa')->default("1");
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
