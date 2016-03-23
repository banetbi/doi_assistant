<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProquestSubmissionEtdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proquest_submission_etds', function (Blueprint $table) {
            $table->increments('id');
            $table->string('document_path');
            $table->string('metadata_path');
            $table->string('submission_path');
            $table->string('university_agreement_path');
            $table->string('dissertation_defense_path');
            $table->boolean('processed')->default(0);
            $table->boolean('has_errors')->default(0);
            $table->text('error_log')->nullable();
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
        Schema::drop('proquest_submission_etds');
    }
}
