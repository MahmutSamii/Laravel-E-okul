<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAllTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('users', function (Blueprint $table) {
            $table->bigincrements('id');
            $table->string('username');
            $table->string('email');
            $table->enum('resource',array('1','2'));
            $table->unsignedBiginteger('resource_id');
            $table->string('password');
            $table->timestamps();
        });

        Schema::create('department', function (Blueprint $table) {
            $table->bigincrements('id');
            $table->string('department_name');
            $table->integer('status')->default(1);
            $table->string('slug');
            $table->timestamps();
        });

        Schema::create('class', function (Blueprint $table) {
            $table->bigincrements('id');
            $table->string('class_name');
            $table->integer('num_of_students')->nullable();
            $table->string('teacher_of_class');
            $table->integer('quota')->nullable();
            $table->integer('vacancy')->nullable();
            $table->timestamps();
        });

        Schema::create('lesson', function (Blueprint $table) {
            $table->bigincrements('id');
            $table->string('lesson');
            $table->string('lecturer');
            $table->integer('status')->default(1);
            $table->timestamps();
        });

        Schema::create('student', function (Blueprint $table) {
            $table->bigincrements('id');
            $table->string('name');
            $table->integer('student_no');
            $table->string('classroom');
            $table->string('phone');
            $table->string('image');
            $table->string('parent_name');
            $table->timestamps();
        });

        Schema::create('student_lesson', function (Blueprint $table) {
            $table->bigincrements('id');
            $table->unsignedBiginteger('student_id');
            $table->unsignedBiginteger('lesson_id');
            $table->timestamps();

        });

        Schema::create('exam', function (Blueprint $table) {
            $table->bigincrements('id');
            $table->unsignedBiginteger('student_id');
            $table->unsignedBiginteger('lesson_id');
            $table->integer('mark');
            $table->timestamps();
        });

        Schema::create('school_stuff', function (Blueprint $table) {
            $table->bigincrements('id');
            $table->unsignedBiginteger('department_id');
            $table->string('name');
            $table->string('address');
            $table->string('email');
            $table->string('phone');
            $table->string('image');
            $table->unsignedBiginteger('is_teacher');
            $table->timestamps();

        });

        Schema::create('documents', function (Blueprint $table) {
            $table->bigincrements('id');
            $table->string('document_title');
            $table->string('file');
            $table->unsignedBiginteger('shared_class');
            $table->unsignedBiginteger('who_shared');
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
        Schema::dropIfExists('department');
        Schema::dropIfExists('class');
        Schema::dropIfExists('lesson');
        Schema::dropIfExists('student');
        Schema::dropIfExists('student_lesson');
        Schema::dropIfExists('exam');
        Schema::dropIfExists('school_stuff');
        Schema::dropIfExists('documents');
    }
}
