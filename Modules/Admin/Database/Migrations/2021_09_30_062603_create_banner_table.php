<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBannerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banner', function (Blueprint $table) {
            $table->id();
            $table->string('ban_title_th')->nullable();
            $table->string('ban_title_en')->nullable();
            $table->text('ban_detail_th')->nullable();
            $table->text('ban_detail_en')->nullable();
            $table->text('file')->nullable();
            $table->text('_token')->nullable();

            $table->timestamps();
        });
    }
}
