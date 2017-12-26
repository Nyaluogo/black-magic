<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurposeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purposes', function(Blueprint $table){
          $table->increments('id');
          $table->timestamps();
          $table->integer('user_id');
          $table->integer('discover')->nullable();
          $table->integer('improve_skills')->nullable();
          $table->integer('promote_work')->nullable();
          $table->integer('sell_Art')->nullable();
          $table->integer('buy_art')->nullable();
          $table->string('other')->nullable();
        });

      
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('purposes');
    }
}
