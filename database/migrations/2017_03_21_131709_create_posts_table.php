<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->text('content');
            $table->string('path')->nullable();
            $table->string('thumb')->nullable();


            $table->string('image_extension', 10)->nullable();
            $table->string('image_name')->unique()->nullable();
            $table->boolean('is_active')->default(false)->nullable();
            $table->boolean('is_featured')->default(false)->nullable();
            $table->string('mobile_image_name')->unique()->nullable();
            $table->string('mobile_image_path')->nullable();
            $table->string('mobile_extension', 10)->nullable();
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->integer('price')->nullable();
            $table->integer('print_options')->nullable();
            $table->integer('number_of_prints_for_sale')->nullable();
            $table->integer('type_of_print')->nullable();
            $table->integer('year_of_completion')->nullable();
            $table->string('category')->nullable();
            $table->string('tags')->nullable();
            $table->string('medium')->nullable();
            $table->string('material')->nullable();
            $table->string('dimensions')->nullable();
            $table->integer('mature_content_available')->nullable();
            $table->string('mature_content_type')->nullable();
            $table->integer('comment_options')->nullable();
            $table->integer('sharing_options')->nullable();
            $table->integer('download_options')->nullable();
            $table->integer('watermark_options')->nullable();
            $table->string('display_options')->nullable();
            $table->integer('critique_options')->nullable();
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
        Schema::dropIfExists('posts');
    }
}
