<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMeetingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meeting', function (Blueprint $table) {
            $table->id();

            $table->string('FA_TITLE')->nullable();
            $table->string('FA_NAME')->nullable();
            $table->string('FA_NAME')->nullable();
            $table->string('FA_NAME')->nullable();
            $table->string('FA_NAME')->nullable();
            $table->string('FA_NAME')->nullable();
            $table->string('FA_NAME')->nullable();
            $table->string('FA_NAME')->nullable();
            $table->string('FA_NAME')->nullable();
            $table->string('FA_NAME')->nullable();
            $table->string('FA_NAME')->nullable();
            $table->string('FA_NAME')->nullable();
            $table->string('FA_NAME')->nullable();
            $table->string('FA_NAME')->nullable();
            $table->string('FA_NAME')->nullable();
            $table->string('FA_NAME')->nullable();
            $table->string('FA_NAME')->nullable();
            $table->string('FA_NAME')->nullable();
            $table->string('FA_NAME')->nullable();
            $table->string('FA_NAME')->nullable();
            $table->string('FA_NAME')->nullable();
            $table->string('FA_NAME')->nullable();
            $table->string('FA_NAME')->nullable();
            $table->string('FA_NAME')->nullable();
            $table->string('FA_NAME')->nullable();
            $table->string('FA_NAME')->nullable();
            $table->string('FA_NAME')->nullable();

            $table->text('file')->nullable();
            $table->text('file_multiple')->nullable();
            $table->text('_token')->nullable();
            
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
        Schema::dropIfExists('meeting');
    }
}
