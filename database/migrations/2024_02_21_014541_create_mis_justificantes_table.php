<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mis_justificantes', function (Blueprint $table) {
            $table->id();
            $table->string("nombre");
            $table->string("grupo");
            $table->date("fecha_falta");
            $table->date("fecha_hasta");
            $table->boolean("estatus");
            $table->timestamps();

            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mis_justificantes');
    }
};