<?php

namespace App\Http\Controllers;

use App\Models\allCategoriesnew;
use Illuminate\Http\Request;

class allCategoriesnewController extends Controller{
    public function index()
    {
        return view('allcategoriesnew');
    }
    public function allCategories(Request $request)
    {
        $selectedCategory = $request->input('category', 'Air Conditioner'); // Default category

        // Fetch data from the database based on the selected category
        $categoryData = YourModel::where('category', $selectedCategory)->limit(3)->get();

        return view('allcategoriesnew', compact('categoryData'));
    }
}

