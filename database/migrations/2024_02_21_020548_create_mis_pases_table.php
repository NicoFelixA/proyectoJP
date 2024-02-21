<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMisPasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mis_pases', function (Blueprint $table) {
            $table->id();
            $table->timestamps(); // This line adds created_at and updated_at columns
            $table->string('nombre');
            $table->string('grupo');
            $table->dateTime('salida');
            $table->string('motivos');
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
        Schema::dropIfExists('mis_pases');
    }
}
