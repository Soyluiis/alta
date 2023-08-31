<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddExclusiveFieldsToAgenciaCargaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('agencia_carga', function (Blueprint $table) {
            // Campos para tráfico marítimo
            $table->string('uso_exclusivo_tarifa_maritimo')->nullable();
            $table->string('uso_exclusivo_referencia_maritimo')->nullable();
            $table->string('uso_exclusivo_id_maritimo')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('agencia_carga', function (Blueprint $table) {
            // Revertir los cambios realizados en el método "up"
            $table->dropColumn([
                'uso_exclusivo_tarifa_maritimo',
                'uso_exclusivo_referencia_maritimo',
                'uso_exclusivo_id_maritimo',
            ]);
        });
    }
}
