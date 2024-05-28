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
        Schema::create('userinfos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('firstName', 30);
            $table->string('lastName', 30);
            $table->string('about', 150);
            $table->string('email');
            $table->string('location', 30);
            $table->string('country', 30);
            $table->timestamps();
            $table->string('photo', 10000);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('userinfos');
    }
};
