<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('education');
            $table->string('address');
            $table->string('designation');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('maritial_status');
            $table->string('mobile_no');
            $table->string('birth_date');
            $table->string('blood_group')->nullable()->default(NULL);
            $table->string('joining_date');
            $table->string('employee_id');

            $table->string('relieving_date')->nullable()->default(NULL);
            $table->string('emergency_contact_no')->nullable()->default(NULL);
            $table->string('gender');
            $table->string('aadhar_card');
            $table->string('aadharcard_file');
            $table->string('pan_card');
            $table->string('pan_card_file');
            $table->string('bank_passbook_cheque');
            $table->string('bank_passbook_cheque_file');
            $table->string('totalleaves');
            $table->string('paidleaves');
            $table->string('unpaidleaves');
            $table->string('mark_list');
            $table->string('mark_list_file');
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
        Schema::dropIfExists('employees');
    }
}
