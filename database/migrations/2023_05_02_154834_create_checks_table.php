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
        Schema::create('checks', function (Blueprint $table) {
            $table->id();
            $table->string('banktype')->nullable();
            $table->string('pay')->nullable();
            $table->string('width')->nullable();
            $table->string('height')->nullable();
            $table->string('Dx_date')->nullable();
            $table->string('Dy_date')->nullable();
            $table->string('Dx_order')->nullable();
            $table->string('Dy_order')->nullable();
            $table->string('Dx_Montant')->nullable();
            $table->string('Dy_Montant')->nullable();
            $table->string('Dx_for')->nullable();
            $table->string('Dy_for')->nullable();
            $table->string('Dx_bares')->nullable();
            $table->string('Dx_bares')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('checks');
    }
};
