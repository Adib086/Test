<?php

namespace App\Http\Controllers;

use App\Models\allCategories;
use Illuminate\Http\Request;

class allCategoriesController extends Controller{
    public function index()
    {
        return view('allcategories');
    }
}