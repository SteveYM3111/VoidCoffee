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
        Schema::create('orderan', function (Blueprint $table) {
            $table->increments('id_orderan');
            $table->unsignedInteger('id_user');
            $table->unsignedInteger('id_barang');
            $table->string('name');
            $table->string('email');
            $table->string('whatsapp');
            $table->string('picture');
            $table->string('price');
            $table->string('no_resi');
            $table->timestamps();
            $table->foreign('id_user')->references('id_user')->on('users')->onDelete('cascade');
            $table->foreign('id_barang')->references('id_barang')->on('barang_table')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orderan');
    }
};
