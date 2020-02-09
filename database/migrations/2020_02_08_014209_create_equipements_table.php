<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquipementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipements', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('model_id');
            $table->unsignedBigInteger('installation_id');
            $table->foreign('model_id')->references('id')->on('produits');
            $table->foreign('installation_id')->references('id')->on('installations');
            $table->date('date_installation')->nullable();
            $table->float('orientation')->nullable();
            $table->string('geolocalisation')->nullable();
            $table->float('elevation')->nullable();
            $table->float('inclinaison')->nullable();
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
        Schema::dropIfExists('equipements');
    }
}
