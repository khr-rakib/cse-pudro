<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegisterStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('register_students', function (Blueprint $table) {
            $table->id();
            $table->string('faculty');
            $table->string('department');
            $table->string('program');
            $table->string('student_id_number');
            $table->string('student_name');
            $table->string('student_phone_number');
            $table->string('student_email');
            $table->string('student_nid');
            $table->string('student_date_of_birth');
            $table->string('blood_group');
            $table->string('student_religion');
            $table->string('student_gender');
            $table->string('student_admission_date');
            $table->string('student_marital_status');
            $table->string('student_picture');
            $table->string('student_address_village');
            $table->string('student_address_post_office');
            $table->string('student_address_postal_code');
            $table->string('student_address_country');
            $table->string('division');
            $table->string('city');
            $table->string('upazila');
            $table->string('payment_method');
            $table->string('amount');
            $table->string('transaction_id');

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
        Schema::dropIfExists('register_students');
    }
}
