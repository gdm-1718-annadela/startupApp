<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTabel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_tabel', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('naam');
            $table->string('achternaam');
            $table->string('soortgebruiker');
            $table->integer('leeftijd');
            $table->string('email')->unique();
            $table->integer('credits');
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
        Schema::dropIfExists('user_tabel');
    }
}
