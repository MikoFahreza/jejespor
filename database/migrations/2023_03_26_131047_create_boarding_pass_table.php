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
        Schema::create('boarding_pass', function (Blueprint $table) {
            $table->increments('id_Boarding');
            
            $table->unsignedInteger('invoice');
            $table->foreign('invoice')->references('invoice')->on('transaksi')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('boarding_pass');
    }
};
