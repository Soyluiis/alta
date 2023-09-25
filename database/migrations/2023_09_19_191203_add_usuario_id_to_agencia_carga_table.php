<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUsuarioIdToAgenciaCargaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('agencia_carga', function (Blueprint $table) {
            $table->string('usuario_id', 255)->nullable();
        });
    }

    public function down()
    {
        Schema::table('agencia_carga', function (Blueprint $table) {
            $table->dropColumn('usuario_id');
        });
    }
}
