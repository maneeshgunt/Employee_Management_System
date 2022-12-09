<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('project_name');
            $table->string('assign_date');
            $table->json('module');
            $table->json('activity');
            $table->json('task_hours');
            $table->string('total_hrs');
            $table->string('developer_hours');
            $table->string('submission_date');
            $table->json('team_name');
            $table->json('team_member');
            $table->string('developer_status');
            $table->string('tester_status');
            $table->string('qa_status');

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
        Schema::dropIfExists('tasks');
    }
}
