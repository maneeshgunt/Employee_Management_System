<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMangepayslipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mangepayslips', function (Blueprint $table) {
            $table->id();
            $table->string('month');
            $table->string('ename');
            $table->string('totalworkingdays');
            $table->string('designation');
            $table->string('paiddays');
            $table->string('department');
            $table->string('bankname');
            $table->string('joindate');
            $table->string('bankaccountnumber');
            $table->string('grosssalary');
            $table->string('uan');
            $table->string('basicsalary');
            $table->string('epf');
            $table->string('houserentallowance');
            $table->string('healthinsurance');
            $table->string('conveyanceallowance');
            $table->string('professionaltax');
            $table->string('medicalallowance');
            $table->string('specialallowance');
            $table->string('totaldeduction');
            $table->string('netpay');
            $table->string('amountinwords');
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
        Schema::dropIfExists('mangepayslips');
    }
}
