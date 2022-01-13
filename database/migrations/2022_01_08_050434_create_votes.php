<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVotes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('votes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ca_name');
            $table->string('vs_description', 250);
            $table->integer('voter_id')->unsigned();
            $table->foreign('voter_id')->references('id')->on('voters');
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
        Schema::dropIfExists('votes');
    }
}
