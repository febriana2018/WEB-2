<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Produk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Produk', function (Blueprint $table) {
            $table->bigIncrements('id_produk');
            $table->bigInteger('id_kategori')->unsigned();
            $table->string('nama');
            $table->integer('harga');
            $table->timestamps();

            $table->foreign('id_kategori')->references('id_kategori')->on('Kategori');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Produk');
    }
}
