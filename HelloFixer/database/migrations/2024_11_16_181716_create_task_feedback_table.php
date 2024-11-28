<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaskFeedbackTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('task_feedback', function (Blueprint $table) {
            $table->integer('feedback_id')->primary(); // Primary key
            $table->integer('consumer_rating'); // Consumer rating
            $table->text('consumer_feedback'); // Consumer feedback
            $table->integer('technician_rating'); // Technician rating
            $table->text('technician_feedback'); // Technician feedback
            $table->unsignedBigInteger('task_id'); // Foreign key for tasks
            $table->timestamps(); // Created_at and updated_at columns

            // Foreign key constraint
            $table->foreign('task_id')->references('task_id')->on('tasks')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('task_feedback');
    }
};

