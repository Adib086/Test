<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->integer('task_id')->primary(); // Primary key
            $table->text('task_status'); // Task status
            $table->text('price'); // Price
            $table->integer('post_id'); // Post ID
            $table->unsignedBigInteger('technician_id'); // Technician ID (foreign key)
            $table->timestamps(); // Created_at and updated_at columns

            // Foreign key constraint
            $table->foreign('technician_id')->references('id')->on('technicians')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
};
