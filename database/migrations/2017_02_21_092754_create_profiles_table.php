<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('phone_number')->nullable();
            $table->string('city')->nullable();
            $table->string('country')->nullable();
            $table->string('website')->nullable();
           
            $table->string('notes')->nullable();
            $table->string('reason_for_joining')->nullable();
            $table->integer('groupID')->nullable();
            
            
            $table->string('fav_visual_artist')->nullable();
            $table->string('fav_movies')->nullable();
            $table->string('fav_music')->nullable();
            $table->string('fav_books')->nullable();
            $table->string('tools_of_trade')->nullable();
            $table->string('biography')->nullable();
            
            $table->string('type_of_artist')->nullable();
            $table->string('area_of_specialty')->nullable();
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
        Schema::dropIfExists('profiles');
    }
}
