<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgenciaCargaTable extends Migration
{
    public function up()
    {
        Schema::create('agencia_carga', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_fiscal');
            $table->string('rfc')->nullable();
            $table->string('no_caat')->nullable();
            $table->string('nombre_comercial')->nullable();
            $table->string('calle')->nullable();
            $table->string('numero_exterior')->nullable();
            $table->string('numero_interior')->nullable();
            $table->string('colonia')->nullable();
            $table->string('codigo_postal')->nullable();
            $table->string('delegacion')->nullable();
            $table->string('estado')->nullable();
            $table->string('banco')->nullable();
            $table->string('cuenta')->nullable();
            $table->string('metodo_pago')->nullable();
            $table->string('regimen_fiscal')->nullable();
            $table->string('forma_pago')->nullable();
            $table->string('uso_cfdi')->nullable();
            $table->string('tipo_alta')->nullable();
            $table->string('metodo_transmision')->nullable();
            $table->string('correo_acceso')->nullable();
            $table->date('vigencia_caat_inicio')->nullable();
            $table->date('vigencia_caat_vencimiento')->nullable();
            $table->string('dato_vucem_usuario')->nullable();
            $table->string('dato_vucem_contrasenia')->nullable();
            $table->string('representante_legal')->nullable();
            $table->string('email')->nullable();
            $table->string('telefono')->nullable();
            $table->string('uso_exclusivo_tarifa')->nullable();
            $table->string('uso_exclusivo_referencia')->nullable();
            $table->string('uso_exclusivo_id')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('agencia_carga');
    }
}
