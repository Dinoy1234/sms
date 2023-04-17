<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('student_id')->nullable();
            $table->string('teacher_id')->nullable();
            $table->string('gender')->nullable();
            $table->string('birth_date')->nullable();
            $table->string('class')->nullable();
            $table->string('religion')->nullable();
            $table->string('join_date')->nullable();
            $table->string('phone')->nullable();
            $table->string('section')->nullable();
            $table->string('image')->nullable();
            $table->string('father_name')->nullable();
            $table->string('father_occ')->nullable();
            $table->string('father_phone')->nullable();
            $table->string('father_email')->nullable();
            $table->string('mother_name')->nullable();    
            $table->string('mother_occ')->nullable();   
            $table->string('mother_phone')->nullable();   
            $table->string('mother_email')->nullable();   
            $table->string('present_address')->nullable();   
            $table->string('permanent_address')->nullable();  
            $table->string('qualification')->nullable();
            $table->string('experience')->nullable();
            $table->string('role')->default('student');
            $table->string('status')->default('pending');


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
};
