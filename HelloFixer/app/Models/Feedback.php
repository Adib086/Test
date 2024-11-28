<?php

// app/Models/Feedback.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model

{
use HasFactory;

// Specify which fields are mass-assignable
protected $fillable = ['rating', 'opinion'];

// If you want the table name to be "feedback" instead of the default "feedbacks"
protected $table = 'feedbacks'; // Make sure this matches your table name

}