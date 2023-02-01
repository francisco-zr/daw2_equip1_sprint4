<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answers', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50)->nullable(false);
            $table->string('recommendation', 255)->nullable(false);
            $table->foreignId('risk_id')->references('id')->on('risks');
            $table->foreignId('intervention_id')->references('id')->on('interventions');
            $table->foreignId('type_measure_id')->references('id')->on('type_measures');
            $table->foreignId('probability_id')->references('id')->on('probabilities');
            $table->foreignId('impact_id')->references('id')->on('impacts');
            $table->foreignId('question_id')->references('id')->on('questions');
            $table->date('hidden');
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
        Schema::dropIfExists('answers');
    }
};
