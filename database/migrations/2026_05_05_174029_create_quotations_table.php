<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('quotations', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('perusahaan')->nullable();
            $table->string('whatsapp');
            $table->string('jenis_packaging');
            $table->string('material')->nullable();
            $table->integer('quantity');
            $table->string('budget')->nullable();
            $table->text('deskripsi')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('quotations');
    }
};