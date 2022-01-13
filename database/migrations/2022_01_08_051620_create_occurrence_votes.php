<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOccurrenceVotes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('occurrence_votes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('occurrence_id')->unsigned();
            $table->foreign('occurrence_id')->references('id')->on('occurrences');
            $table->integer('vote_id')->unsigned();
            $table->foreign('vote_id')->references('id')->on('votes');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('occurrence_votes');
    }
}
