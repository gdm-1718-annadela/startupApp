<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectTabel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_tabel', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('naam');
            $table->string('uitleg');
            $table->integer('credits_doelbedrag');
            $table->integer('credits_gesubsideert');
            $table->date('gepubliceerd_tot');
            $table->date('gepubliceerd_op');

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
        Schema::dropIfExists('project_tabel');
    }
}
