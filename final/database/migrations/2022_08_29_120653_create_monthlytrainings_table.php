<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMonthlytrainingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('monthlytrainings', function (Blueprint $table) {
            $table->id();
            $table->string('departments');
            $table->json('employee');
            $table->string('month');
            $table->string('trainingfile');
            $table->string('submissiondate');

            $table->string('comments');
            $table->string('candidatefile')->nullable()->default(NULL);
            $table->string('marks')->nullable()->default(NULL);
            $table->string('comments1')->nullable()->default(NULL);
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
        Schema::dropIfExists('monthlytrainings');
    }
}
