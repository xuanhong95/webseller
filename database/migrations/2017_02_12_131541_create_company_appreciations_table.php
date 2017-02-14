<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyAppreciationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_appreciations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('student_id')->unsigned();
            $table->foreign('student_id')->references('id')->on('users');
            $table->integer('general_appreciation_id')->unsigned();
            $table->foreign('general_appreciation_id')->references('id')->on('general_appreciations');
            $table->boolean('is_continue_receive')->default(true);
            $table->string('missing_knownledge')->nullable();
            $table->string('necessary_knownledge')->nullable();
            $table->boolean('is_language_necessary')->default(true);
            $table->boolean('is_language_met')->default(true);
            $table->string('shortcoming')->nullable();
            $table->string('advantage')->nullable();
            $table->string('procedure_improvement')->nullable();
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
        Schema::drop('company_appreciations');
    }
}