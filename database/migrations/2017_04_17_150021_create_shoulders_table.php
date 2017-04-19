<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShouldersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shoulders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('shoulder_id')->unique();
            $table->string('name')->unique();
            $table->integer('shoulder_type_id')->unsigned();
            $table->foreign('shoulder_type_id')->references('id')->on('shoulder_type');
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
        Schema::drop('shoulders');
    }
}
