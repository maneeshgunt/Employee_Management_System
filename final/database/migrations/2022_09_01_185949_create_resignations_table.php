<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResignationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resignations', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->string('employeeid');
            $table->string('department');
            $table->string('noticeperiod');
            $table->string('resignationreaason');
            $table->string('date');
            $table->string('status')->nullable()->default(NULL);
            $table->string('startdate');
            $table->string('enddate');
            $table->string('comments')->nullable()->default(NULL);
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
        Schema::dropIfExists('resignations');
    }
}
