<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->string('password')->nullable();
            $table->string('avatar')->nullable();
            $table->string('slug')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('provider')->nullable();
            $table->string('provider_id')->nullable();
            $table->boolean('gender')->nullable();
            $table->integer('user_level')->default(0);
            $table->date('DOB')->nullable();
            $table->string('reason_for_joining')->nullable();
            $table->integer('groupID')->nullable();
            $table->boolean('account_active')->default(true);
            $table->macAddress('device')->nullable();
            
            $table->ipAddress('ip_address')->nullable();
         
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
