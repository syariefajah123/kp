<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::create('inquiries', function (Blueprint $table) {

        $table->id();

        $table->string('nama');

        $table->string('whatsapp');

        $table->string('email');

        $table->string('produk')->nullable();

        $table->text('pesan');

        $table->string('status')->default('baru');

        $table->timestamps();

    });
}

    public function down()
    {
        Schema::dropIfExists('inquiries');
    }
};