<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ContentAnswers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('content_answers', function(Blueprint $table){ 
            $table->increments('content_id');
            $table->string('name',255)->unique();
            $table->integer('roll_no')->unique();
            $table->bigInteger('mobile_number');
            $table->string('hostel',255);
            $table->text('answer1');
            $table->text('answer2');
            $table->text('answer3');
            $table->text('answer4');
            $table->text('answer5');
            $table->text('answer6');
            $table->text('answer7');
            $table->text('answer8');
            $table->text('answer9');
            $table->text('answer10');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('content_answers');
    }
}
