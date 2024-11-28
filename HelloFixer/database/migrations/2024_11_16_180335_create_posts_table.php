<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->integer('post_id')->primary(); // Primary key
            $table->text('post_detail'); // Post details
            $table->text('image'); // Image (as a URL or path)
            $table->text('category'); // Category
            $table->text('subcategory'); // Subcategory
            $table->unsignedBigInteger('user_id'); // Foreign key for users
            $table->timestamps(); // Created_at and updated_at columns

            // Foreign key constraint
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
};
