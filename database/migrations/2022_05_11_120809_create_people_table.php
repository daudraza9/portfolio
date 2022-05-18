<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('designation');
            $table->string('description');
            $table->integer('age');
            $table->string('nationality');
            $table->string('freelance');
            $table->string('address');
            $table->string('phone');
            $table->string('email');
            $table->string('skype');
            $table->string('slug');
            $table->string('language');
            $table->string('language');
            $table->string('experience');
            $table->string('project_completed');
            $table->integer('total_client');
            $table->string('total_tip');
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
        Schema::dropIfExists('people');
    }
}
