<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SchoolsMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schools', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',300)->nullable();
            $table->text('description')->nullable();
            $table->string('logo',300)->nullable();
            $table->text('address')->nullable();
            $table->string('phone_number',300)->nullable();
            $table->string('mobile_number',300)->nullable();
            $table->string('contact_person',300)->nullable();
            $table->string('web_site',300)->nullable();
            $table->string('email',300)->nullable();
            $table->text('doman')->nullable();
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
        Schema::dropIfExists('schools');
    }
}
