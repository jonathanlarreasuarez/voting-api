<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOccurrence extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('occurrences', function (Blueprint $table) {
            $table->increments('id');
            $table->string('oc_description', 255);
            $table->date('pr_start_date')->nullable();
            $table->date('pr_end_date')->nullable();
            $table->integer('status_id');
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
        Schema::dropIfExists('occurrences');
    }
}
