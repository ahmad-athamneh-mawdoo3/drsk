<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class HomeworksMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homeworks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',300)->nullable();
            $table->unsignedTinyInteger('school_id')->nullable();
            $table->unsignedTinyInteger('divison_id')->nullable();
            $table->unsignedTinyInteger('grade_id')->nullable();
            $table->unsignedTinyInteger('course_id')->nullable();
            $table->unsignedTinyInteger('teacher_id')->nullable();
            $table->string('title',300)->nullable();
            $table->text('body')->nullable();
            $table->timestamp('due_date')->nullable();
            $table->integer('mark')->nullable();
            $table->unsignedTinyInteger('files_id')->nullable();
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
        Schema::dropIfExists('homeworks');
    }
}
