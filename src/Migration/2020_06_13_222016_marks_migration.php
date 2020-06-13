<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MarksMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marks', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedTinyInteger('student_id')->nullable();
            $table->unsignedTinyInteger('course_id')->nullable();
            $table->unsignedTinyInteger('subject_id')->nullable();
            $table->unsignedTinyInteger('grade_id')->nullable();
            $table->unsignedTinyInteger('division_id')->nullable();
            $table->unsignedBigInteger('first_term_mark')->nullable();
            $table->unsignedBigInteger('second_term_mark')->nullable();
            $table->unsignedBigInteger('third_term_mark')->nullable();
            $table->unsignedBigInteger('final_term_mark')->nullable();
            $table->unsignedBigInteger('activities_mark')->nullable();
            $table->string('title',300)->nullable();
            $table->unsignedBigInteger('type')->nullable();
            $table->unsignedTinyInteger('semester_id')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('marks');
    }
}
