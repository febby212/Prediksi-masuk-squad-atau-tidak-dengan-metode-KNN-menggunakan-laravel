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
            Schema::create('pemains', function (Blueprint $table) {
                $table->id();
                $table->string('nama');
                $table->integer('umur');
                $table->integer('berat_badan');
                $table->integer('tinggi');
                $table->integer('kaki_utama');
                $table->integer('pace');
                $table->integer('shooting');
                $table->integer('passing');
                $table->integer('dribbling');
                $table->integer('defending');
                $table->integer('physical');
                $table->integer('overall');
                $table->string('masuk_squad');
                $table->timestamps();
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemains');
    }
};
