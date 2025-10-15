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
        Schema::create('vacantes', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('empresa')->nullable();
            $table->string('ubicacion')->nullable();
            $table->string('tipo', 100)->nullable();
            $table->float('sueldo')->nullable();
            $table->string('contacto')->nullable();
            $table->text('descripcion')->nullable();
            $table->string('flyer')->nullable();
            $table->boolean('activa')->default(true);
            $table->timestamps();
            
            $table->index('tipo');
            $table->index('ubicacion');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vacantes');
    }
};
