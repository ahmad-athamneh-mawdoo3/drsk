<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DivisionsMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('divisions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',300)->nullable();
            $table->unsignedTinyInteger('class_id')->nullable();
            $table->unsignedTinyInteger('school_id')->nullable();
            $table->unsignedTinyInteger('incharge_teacher')->nullable();
            $table->unsignedTinyInteger('program_id')->nullable();
            $table->unsignedTinyInteger('semester_id')->nullable();
            $table->text('description')->nullable();
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
        Schema::dropIfExists('divisions');
    }
}
