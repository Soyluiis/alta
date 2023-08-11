<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNoCaatAereoToAgenciaCargaTable extends Migration
{
    public function up()
    {
        Schema::table('agencia_carga', function (Blueprint $table) {
            $table->string('no_caat_aereo')->nullable()->after('no_caat');
        });
    }

    public function down()
    {
        Schema::table('agencia_carga', function (Blueprint $table) {
            $table->dropColumn('no_caat_aereo');
        });
    }
}
