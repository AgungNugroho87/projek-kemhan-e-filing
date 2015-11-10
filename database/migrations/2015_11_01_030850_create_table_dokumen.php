<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDokumen extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dokumen_tbls',function(Blueprint $table){
            $table->increments('id');
            $table->string('judul');
            $table->string('keterangan');
            $table->string('nama_file');
            $table->integer('ukuran_file');
            $table->integer('babin_id');
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
        Schema::drop('dokumen_tbls');
    }
}
