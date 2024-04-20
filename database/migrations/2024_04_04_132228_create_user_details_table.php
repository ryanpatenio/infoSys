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
        Schema::create('user_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->string('gender');
            $table->string('occupation');
            $table->date('bday');
            $table->string('contact');
            $table->string('bloodtype');
            $table->string('country');
            $table->string('status');
            $table->string('age');
            $table->string('address');
            $table->foreignId('region_id')->references('id')->on('regions')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('province_id')->references('id')->on('provinces')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('city_id')->references('id')->on('cities')->onDelete('cascade')->onUpdate('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_details');
    }
};
