<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCareersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('careers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('mobile');
            $table->string('major');
            $table->string('birth');
            $table->string('email');
            $table->string('gender');
            $table->string('department');
            $table->string('university');
            $table->string('faculty');
            $table->string('grad_year');
            $table->string('experience');
            $table->string('last_func');
            $table->string('last_org');
            $table->string('cv');
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
        Schema::drop('careers');
    }
}
