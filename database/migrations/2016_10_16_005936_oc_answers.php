<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class OcAnswers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oc_answers', function(Blueprint $table){ 
            $table->increments('oc_id');
            $table->string('name',255)->unique();
            $table->integer('roll_no')->unique();
            $table->string('email',255);
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
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('oc_answers');
    }
}
