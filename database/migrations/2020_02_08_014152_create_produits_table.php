<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produits', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('marque');
            $table->string('reference');
            $table->unique(['marque', 'reference'], 'signature');
            $table->float('longueur')->nullable();
            $table->float('largeur')->nullable();
            $table->float('hauteur')->nullable();
            $table->float('profondeur')->nullable();
            $table->float('poids')->nullable();
            $table->float('rendement')->nullable();
            $table->string('equipement');
            $table->boolean('certifie')->default(false);
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
        Schema::dropIfExists('produits');
    }
}
