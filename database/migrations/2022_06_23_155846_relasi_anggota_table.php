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
        Schema::table('anggota', function (Blueprint $table){
            $table->unsignedBigInteger('simpanan_id')->nullable();
            $table->foreign('simpanan_id')->references('id_simpanan')->on('simpanan');

            $table->unsignedBigInteger('pengambilan_id')->nullable();
            $table->foreign('pengambilan_id')->references('id_pengambilan')->on('pengambilan');

            $table->unsignedBigInteger('pinjaman_id')->nullable();
            $table->foreign('pinjaman_id')->references('id_pinjaman')->on('pinjaman');

            $table->unsignedBigInteger('angsuran_id')->nullable();
            $table->foreign('angsuran_id')->references('id_angsuran')->on('angsuran');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('anggota', function (Blueprint $table){
            $table->dropForeign(['simpanan_id','pengambilan_id','pinjaman_id']);
        });
    }
};