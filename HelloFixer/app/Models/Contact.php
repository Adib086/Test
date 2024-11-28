<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $table = 'contact';  // Define the table name if it's not the plural of the model name

    protected $fillable = ['name', 'email', 'phone', 'message'];  // Allow mass assignment for these fields
}
