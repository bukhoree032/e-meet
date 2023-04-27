<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSystemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('system', function (Blueprint $table) {
            $table->id();
            $table->string('sys_nameweb_th')->nullable();
            $table->string('sys_nameweb_en')->nullable();
            $table->string('sys_name_th')->nullable();
            $table->string('sys_name_en')->nullable();
            $table->string('sys_subname_th')->nullable();
            $table->string('sys_subname_en')->nullable();
            $table->string('sys_facebook')->nullable();
            $table->text('sys_facebook_link')->nullable();
            $table->string('sys_phon')->nullable();
            $table->string('sys_mail')->nullable();
            $table->text('sys_address_th')->nullable();
            $table->text('sys_address_en')->nullable();
            $table->text('file_icon')->nullable();
            $table->text('file_logo')->nullable();
            $table->text('file_background')->nullable();
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
        Schema::dropIfExists('system');
    }
}
