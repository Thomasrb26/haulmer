<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPersonaIdToAdministradorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('administrador', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');

            $table->foreign(columns: 'user_id')->references('id')->on('persona');
            //
            //
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('administrador', function (Blueprint $table) {
            //
        });
    }
}
