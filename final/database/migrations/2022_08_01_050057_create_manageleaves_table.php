<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManageleavesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manageleaves', function (Blueprint $table) {
            $table->id();
            $table->string('date');
            $table->string('end_date');
            $table->string('name');
            $table->string('leave_reason');
            $table->string('leave_days');
            $table->string('leave_status');
            $table->string('comments');
            $table->string('attachment');
            $table->string('attachment_file');
           
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
        Schema::dropIfExists('manageleaves');
    }
}
