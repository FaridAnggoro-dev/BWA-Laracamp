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
        Schema::create('camp_benefits', function (Blueprint $table) {
            $table->id();
            // Cara 1
            // $table->bigInteger('camp_id')->unsigned();
            // Cara 2
            $table->foreignId('camp_id')->constrained();
            $table->string('name');
            $table->timestamps();

            // Cara 1
            // Awal membuat relasi
            // $table->foreign('camp_id')->references('id')->on('camps')->onDelete('cascade');
            // Akhir membuat relasi
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('camp_benefits');
    }
};
