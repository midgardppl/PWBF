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
        Schema::create('Penilaian', function (Blueprint $table) {
            $table->id();
            $table->char('idPenilaian',8)->unique();
            $table->integer('nilaiUts');
            $table->integer('nilaiUas');
            $table->integer('Pengetahuan');
            $table->integer('Keterampilan');
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
        Schema::dropIfExists('Penilaian');
    }
};
