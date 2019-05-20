<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateViewProdukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('view_produk', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_produk');
            $table->unsignedInteger('id_kategori');
            $table->unsignedInteger('nama_kategori');
            $table->string('asal');
            $table->string('link');
            $table->string('harga');
            $table->text('image')->nullable();
            $table->foreign('id_kategori')->references('id')->on('kategori')->onUpdate('cascade');
            $table->foreign('nama_kategori')->references('id')->on('kategori')->onUpdate('cascade');
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
        Schema::dropIfExists('view_produk');
    }
}
