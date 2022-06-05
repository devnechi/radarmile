<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fbcuserstbl', function (Blueprint $table) {
            $table->increments('user_id');
            $table->string('fname');
            $table->string('mname');
            $table->string('lname');
            $table->string('dob');
            $table->string('gender_id')->nullable();
            $table->string('martialstatus');
            $table->integer('role_id');
            $table->string('job_title');
            $table->string('job_desc');
            $table->string('phonenumber');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('user_photo_id');
            $table->string('user_contract_id');
            $table->integer('status_id')->nullable();
            $table->integer('created_by');
            $table->string('last_active');
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('fbcuserstbl');
    }
}
