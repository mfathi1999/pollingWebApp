<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProblemAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('problem_answers', function (Blueprint $table) {
            $table->id();
            $table->foreingId('poll_answer_id');
            $table->foreignId('problem_id');
            $table->json('content');
            $table->timestamp('answerd_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('problem_answers');
    }
}
