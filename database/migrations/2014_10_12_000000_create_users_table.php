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
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('mobile')->unique();
            $table->timestamp('mobile_verified_at')->nullable();
            $table->string('password');
            $table->string('SSN')->nullable();
            $table->string('dob')->nullable();
            $table->string('pob')->nullable();
            $table->string('address')->nullable();
            $table->string('telephone')->nullable();
            $table->string('current_employer')->nullable();
            $table->string('employer_address')->nullable();
            $table->string('title')->nullable();
            $table->string('supervisor_name')->nullable();
            $table->string('supervisor_phone')->nullable();
            $table->string('marital_status')->nullable();
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
        Schema::dropIfExists('users');
    }
}
