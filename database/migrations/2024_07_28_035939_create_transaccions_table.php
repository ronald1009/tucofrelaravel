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
        Schema::create('transaccion', function (Blueprint $table) {
            $table->id();
            $table->integer('idtipodetransaccion');
            $table->integer('idmunicipio');
            $table->string('fecha');
            $table->string('hora');
            $table->float('monto');
            $table->integer('idcuentaorigen');
            $table->integer('idcuentadestino');
            $table->timestamps();
            $table->string('imagen');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaccion');
    }
};

