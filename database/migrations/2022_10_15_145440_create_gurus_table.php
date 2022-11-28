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
        Schema::create('Guru', function (Blueprint $table) {
            $table->id();
            $table->char('NIP', 12)->unique();
            $table->string('nama');
            $table->string('passGuru')->unique();
            $table->string('alamat');
            $table->boolean('j_kel');
            $table->string('no_telp');
            $table->string('email')->nullable();
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
        Schema::dropIfExists('Guru');
    }
};
