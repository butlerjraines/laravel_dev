<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSurveyResultAlphasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('survey_result_alphas', function (Blueprint $table) {
            $table->id(
            $table->timestamps(
            $table->unsignedBigInteger('respondent_id'
            $table->foreign('respondent_id')
              ->references('id')->on('users')
              ->onDelete('cascade'
            $table->string('respondent_alternate_id'
            $table->string('survey_id'
            'score_connective'
            'score_curative'
            'score_curious'
            'score_experiment'
            'score_expert'
            'score_flexible'
            'score_generative'
            'score_integrative'
            'score_methodical'
            'score_reliable'
            'percentile_connective'
            'percentile_curative'
            'percentile_curious'
            'percentile_experiment'
            'percentile_expert'
            'percentile_flexible'
            'percentile_generative'
            'percentile_integrative'
            'percentile_methodical'
            'percentile_reliable'
            $table->boolean('active'
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('survey_result_alphas'
    }
}
