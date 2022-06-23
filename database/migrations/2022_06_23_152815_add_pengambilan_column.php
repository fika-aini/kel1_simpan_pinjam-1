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
        Schema::table('pengambilan', function (Blueprint $table) {
            $table->date('tgl_ambil')->after('id_pengambilan');
            $table->integer('jumlah')->after('tgl_ambil');
            $table->integer('saldo')->after('jumlah');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pengambilan', function (Blueprint $table) {
            $table->dropColumn(['tgl_ambil', 'jumlah', 'saldo']);
        });
    }
};
