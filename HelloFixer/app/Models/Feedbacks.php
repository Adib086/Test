<?php

// app/Models/Feedback.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedbacks extends Model

{
use HasFactory;

// Specify which fields are mass-assignable
protected $fillable = ['rating', 'opinion'];

}