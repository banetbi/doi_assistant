<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubjectCrosswalkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subject_crosswalk', function (Blueprint $table) {
            $table->increments('id');
            $table->text('proquest_subject');
            $table->text('proquest_code');
            $table->text('digital_commons_discipline');
            $table->text('lc_subject');
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
        Schema::drop('subject_crosswalk');
    }
}
