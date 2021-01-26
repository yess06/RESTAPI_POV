<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQualificationActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qualification_activities', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->unsignedInteger('lesson_id');
            $table->foreign('lesson_id')->references('id')->on('lessons')
            ->onUpdate('cascade')
            ->onUpdate('cascade');
            $table->unsignedInteger('time_id');
            $table->foreign('time_id')->references('id')->on('times')
            ->onUpdate('cascade')
            ->onUpdate('cascade');
            $table->unsignedInteger('activity_id');
            $table->foreign('activity_id')->references('id')->on('activities')
            ->onUpdate('cascade')
            ->onUpdate('cascade');
            $table->string('qualification');
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
        Schema::dropIfExists('qualification_activities');
    }
}
