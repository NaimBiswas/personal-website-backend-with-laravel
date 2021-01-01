<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHeaderControllersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('header_controllers', function (Blueprint $table) {
            $table->id();
            $table->text('heading')->nullable();
            $table->text('static_text')->nullable();
            $table->text('dynamic_text')->nullable();
            $table->string('get_start')->nullable();
            $table->string('learn_more')->nullable();
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
        Schema::dropIfExists('header_controllers');
    }
}
