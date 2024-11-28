<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index1()
    {
        return view('faq'); // Pass the FAQs to the view
    }
}

