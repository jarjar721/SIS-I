<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolPriTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rol-pri', function (Blueprint $table) {
            $table->integer('fk_rol');
            $table->integer('fk_privilegio');

            $table->foreign('fk_rol')->references('code')->on('rol');
            $table->foreign('fk_privilegio')->references('code')->on('privilegio');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rol-pri');
    }
}
