<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CandidateDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidate_details', function(Blueprint $table){
            $table->increments('candidate_id');
            $table->string('name',255)->unique();
            $table->integer('roll_no')->unique();
            $table->string('hostel',255);
            $table->bigInteger('mobile_number');
            $table->string('pref1',255);
            $table->string('pref2',255)->nullable();
            $table->string('pref3',255)->nullable();
            $table->string('status_oc',255);
            $table->string('status_content',255);
            $table->text('remarks');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('candidate_details');
    }
}
