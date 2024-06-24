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
        Schema::create('barang_table', function (Blueprint $table) {
            $table->increments('id_barang');
            $table->string('name');
            $table->integer('qty');
            $table->decimal('price');
            $table->text('description');
            $table->string('picture');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barang_table');
    }
};
