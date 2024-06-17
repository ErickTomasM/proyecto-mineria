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
       
        Schema::create('proveedores', function (Blueprint $table) {
            $table->bigIncrements('id_proveedor');
            $table->string('nombres', 30);
            $table->string('paterno', 12)->nullable();
            $table->string('materno', 12)->nullable();
            $table->char('ci', 12);
            $table->string('tipo', 20)->nullable();
            $table->char('telefono', 10)->nullable();
            $table->string('empresa_cooperativa', 20)->nullable();
            $table->string('seccion', 20)->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('proveedores');
    }
    
};
