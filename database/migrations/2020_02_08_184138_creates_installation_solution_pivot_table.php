<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatesInstallationSolutionPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('installation_solution', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('installation_id');
            $table->unsignedBigInteger('solution_id');
            //$table->foreign('installation_id')->references('id')->on('installations');
            //$table->foreign('solution_id')->references('id')->on('solutions');
            //$table->date('date_implemented_solution');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('installation_solution');
    }
}
