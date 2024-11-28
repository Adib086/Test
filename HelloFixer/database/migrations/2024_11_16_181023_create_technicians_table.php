<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTechniciansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('technicians', function (Blueprint $table) {
            $table->integer('technician_id')->primary(); // Primary key
            $table->text('national_id'); // National ID
            $table->text('full_name'); // Full Name
            $table->text('required_documents'); // Required Documents
            $table->text('skill_details'); // Skill Details
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
        Schema::dropIfExists('technicians');
    }
};
