<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWeekleytimesheetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('weekleytimesheets', function (Blueprint $table) {
            $table->id();
            $table->string('month');
            $table->string('startdate');
            $table->string('enddate');
            $table->string('uploadfile');
            $table->string('uploadfilename')->nullable()->default(NULL);
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
        Schema::dropIfExists('weekleytimesheets');
    }
}
