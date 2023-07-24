<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddContactoCuentasEmailTelefonoToAgenciaCargaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('agencia_carga', function (Blueprint $table) {
            $table->string('contacto_cuentas')->nullable();
            $table->string('telefono_cuentas');
            $table->string('email_cuentas')->nullable();

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
            $table->dropColumn('contacto_cuentas');
            $table->dropColumn('email_cuentas');
            $table->dropColumn('telefono_cuentas');
        });
    }
}
