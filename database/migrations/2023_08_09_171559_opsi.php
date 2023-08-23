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
        Schema::create('opsi', function (Blueprint $table) {
            $table->id();
            $table->string('pertanyaan_id');
            $table->string('opsi1');
            $table->string('opsi2');
            $table->string('opsi3');
            $table->string('opsi4');
            $table->string('jawaban');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
