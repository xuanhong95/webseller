<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('student_id');
            $table->foreign('student_id')->references('id')->on('User');
            $table->integer('criteria_id');
            $table->foreign('criteria_id')->references('id')->on('taskCriteria');
            $table->integer('point_id');
            $table->foreign('point_id')->references('id')->on('point');
            $table->string('comment',100);
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
        Schema::drop('tasks');
    }
}
