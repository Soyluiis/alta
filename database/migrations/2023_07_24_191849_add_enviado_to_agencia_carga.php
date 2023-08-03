<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddEnviadoToAgenciaCarga extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::table('agencia_carga', function (Blueprint $table) {
        $table->boolean('enviado')->nullable()->default(false);
    });
}


    public function down()
    {
        Schema::table('agencia_carga', function (Blueprint $table) {
            $table->dropColumn('enviado');
        });
    }
}
