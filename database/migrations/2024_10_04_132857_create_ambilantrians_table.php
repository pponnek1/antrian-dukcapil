<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ambilantrians', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->string('kode');
            $table->string('nama_lengkap');
            $table->string('alamat');
            $table->string('nomorhp');
            $table->integer('batas_antrian');
            $table->integer('users_id');
            $table->integer('antrians_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ambilantrians');
    }
};
