<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWhitelistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('whitelists', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('user_id');
            $table->string('comment');
            $table->unsignedInteger('supporter_id');
            $table->unsignedInteger('question_1');
            $table->unsignedInteger('answer_1_a');
            $table->unsignedInteger('answer_1_b');
            $table->unsignedInteger('answer_1_c');
            $table->unsignedInteger('question_2');
            $table->unsignedInteger('answer_2_a');
            $table->unsignedInteger('answer_2_b');
            $table->unsignedInteger('answer_2_c');
            $table->unsignedInteger('question_3');
            $table->unsignedInteger('answer_3_a');
            $table->unsignedInteger('answer_3_b');
            $table->unsignedInteger('answer_3_c');
            $table->unsignedInteger('question_4');
            $table->unsignedInteger('answer_4_a');
            $table->unsignedInteger('answer_4_b');
            $table->unsignedInteger('answer_4_c');
            $table->unsignedInteger('question_5');
            $table->unsignedInteger('answer_5_a');
            $table->unsignedInteger('answer_5_b');
            $table->unsignedInteger('answer_5_c');
            $table->unsignedInteger('question_6');
            $table->unsignedInteger('answer_6_a');
            $table->unsignedInteger('answer_6_b');
            $table->unsignedInteger('answer_6_c');
            $table->unsignedInteger('question_7');
            $table->unsignedInteger('answer_7_a');
            $table->unsignedInteger('answer_7_b');
            $table->unsignedInteger('answer_7_c');
            $table->unsignedInteger('question_8');
            $table->unsignedInteger('answer_8_a');
            $table->unsignedInteger('answer_8_b');
            $table->unsignedInteger('answer_8_c');
            $table->unsignedInteger('question_9');
            $table->unsignedInteger('answer_9_a');
            $table->unsignedInteger('answer_9_b');
            $table->unsignedInteger('answer_9_c');
            $table->unsignedInteger('question_10');
            $table->unsignedInteger('answer_10_a');
            $table->unsignedInteger('answer_10_b');
            $table->unsignedInteger('answer_10_c');
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
        Schema::dropIfExists('whitelists');
    }
}
