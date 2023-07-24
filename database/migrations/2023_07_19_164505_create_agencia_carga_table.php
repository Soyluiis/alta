<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgenciaCargaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agencia_carga', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_fiscal');
            $table->string('rfc');
            $table->string('no_caat');
            $table->string('nombre_comercial');
            $table->string('calle');
            $table->string('codigo_postal');
            $table->string('numero_interior')->nullable();
            $table->string('numero_exterior');
            $table->string('colonia');
            $table->string('delegacion');
            $table->string('estado');
            $table->string('tipo_alta');
            $table->string('metodo_transmision');
            $table->string('correo_acceso');
            $table->date('vigencia_caat_inicio');
            $table->date('vigencia_caat_vencimiento');
            $table->string('dato_vucem_usuario');
            $table->string('dato_vucem_contrasenia');
            $table->string('banco');
            $table->string('cuenta');
            $table->string('metodo_pago');
            $table->string('regimen_fiscal');
            $table->integer('forma_pago');
            $table->string('uso_cfdi');
            $table->string('representante_legal');
            $table->string('email');
            $table->string('telefono');
            $table->string('uso_exclusivo_tarifa');
            $table->string('uso_exclusivo_referencia');
            $table->string('uso_exclusivo_id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('agencia_carga');
    }
}
