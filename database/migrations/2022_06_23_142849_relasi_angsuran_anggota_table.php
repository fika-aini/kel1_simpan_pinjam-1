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
        Schema::table('angsuran', function (Blueprint $table){
            $table->unsignedBigInteger('anggota_id')->nullable();
            $table->foreign('anggota_id')->references('id_anggota')->on('anggota');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('angsuran', function (Blueprint $table){
            $table->dropForeign(['anggota_id']);
        });
    }
};