<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trainings', function (Blueprint $table) {

            $table->id();
            $table->string('department');
            $table->json('members');
            $table->string('traningtype');
            $table->string('trainername');
            $table->string('timeduration');
            $table->string('startDate');
            $table->string('endDate');
            $table->string('discription');
            $table->string('cost');
            $table->string('status')->nullable()->default(NULL);
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
        Schema::dropIfExists('trainings');
    }
}
