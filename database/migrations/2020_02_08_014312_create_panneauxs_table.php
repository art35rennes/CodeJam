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
            $table->unsignedBigInteger('produit_id');
            $table->foreign('produit_id')->references('id')->on('produits');
            $table->float('puissance_nominale');
            $table->float('tension_nominale');
            $table->float('tension_maximale');
            $table->float('courant_maximal');
            $table->float('tension_circuit_ouvert');
            $table->float('courant_court_circuit');
            $table->unique(['puissance_nominale',
                            'tension_nominale',
                            'tension_maximale',
                            'courant_maximal',
                            'courant_court_circuit',
                            'tension_circuit_ouvert'
                            ], 'signature');
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
