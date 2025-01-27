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
        Schema::create('rescatados', function (Blueprint $table) {
            $table->id();
            $table-> string('nombre' , 255);
            $table-> string('foto' , 255);
            $table-> integer('edad');
            $table-> string('sexo', 255);
            $table-> string('procedencia' , 255);
            $table-> string('valoracion_medica' , 255);
            $table->integer('medico_id');
            $table->integer('rescate_id');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rescatados');
    }
};
