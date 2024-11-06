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
        Schema::create('equipments', function (Blueprint $table) {
            $table->id();
            $table->date('activity_date');
            $table->time('input_time');
            $table->time('output_time');
            $table->string('equipment', 255);
            $table->string('brand', 255);
            $table->string('serial_number', 15);
            $table->string('responsible', 255);
            $table->string('cpf', 14);
            $table->string('rg', 14);
            $table->string('company', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equipments');
    }
};
