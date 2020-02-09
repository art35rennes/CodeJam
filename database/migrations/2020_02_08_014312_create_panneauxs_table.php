<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePanneauxsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('panneaus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->float('puissance_nominale');
            $table->float('tension_nominale');
            $table->float('tension_maximale');
            $table->float('courant_maximal');
            $table->float('tension_circuit_ouvert');
            $table->float('courant_court_circuit');
            $table->timestamps();
            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('panneauxs');
    }
}
