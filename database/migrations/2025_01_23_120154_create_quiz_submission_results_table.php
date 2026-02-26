<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuizSubmissionResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quiz_submission_results', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->nullable();
            $table->bigInteger('quiz_id')->nullable();
            $table->json('quiz_submission_ids')->nullable();
            $table->integer('submission_no')->nullable();
            $table->float('total_mark')->nullable();
            $table->float('obtain_mark')->nullable();
            $table->float('pass_mark')->nullable();
            $table->dateTime('submission_datetime')->nullable();

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
        Schema::dropIfExists('quiz_submission_results');
    }
}
