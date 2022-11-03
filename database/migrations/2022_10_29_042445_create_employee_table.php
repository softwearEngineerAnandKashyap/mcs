<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee', function (Blueprint $table) {
            $table->integer('employee_id_pk')->uniqid;
            $table->integer('school_id_fk',244);
            $table->string('designation',244);
            $table->string('department',244);
            $table->string('joiningDate',244);
            $table->string('qualification',244);
            $table->string('experience',244);
            $table->string('experienceDetails',244);
            $table->string('name',244);
            $table->string('dob',244);
            $table->string('gender',244);
            $table->string('bloodGroup',244);
            $table->string('religion',244);
            $table->string('mobileNo',244);
            $table->string('emailId',244);
            $table->string('presentAddress',244);
            $table->string('permanentAddress',244);
            $table->string('profilePic',244);
            $table->string('L_PhoneNo',244);
            $table->string('L_Password',244);
            $table->string('bankName',244);
            $table->string('holderName',244);
            $table->string('branchName',244);
            $table->string('bankAddress',244);
            $table->string('IFSC_Code',244);
            $table->string('AccountNo',244);      


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
        Schema::dropIfExists('employee');
    }
}
