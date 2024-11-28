<?php

// database/migrations/xxxx_xx_xx_xxxxxx_create_feedbacks_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeedbacksTable extends Migration

{
public function up()
{

Schema::create('feedbacks', function (Blueprint $table) {
$table->id(); // auto-incrementing primary key
$table->integer('rating'); // stores the rating value
$table->text('opinion'); // stores the user's opinion/feedback
$table->timestamps(); // created_at and updated_at timestamps


$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
});
}

public function down()

{

Schema::dropIfExists('feedbacks'); // drops the table if rolling back

}
};