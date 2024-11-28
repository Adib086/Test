<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;

class FeedbackController extends Controller
{
    public function index()
    {
        return view('feedbacks');
    }

    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'rating' => 'required|integer|min:1|max:5',
            'opinion' => 'required|string|max:255',
        ]);

        // Create a new feedback entry
        Feedback::create([
            'rating' => $request->input('rating'),
            'opinion' => $request->input('opinion'),
        ]);

        // Redirect back with a success message
        return redirect()->route('feedbacks.create')->with('success', 'Feedback submitted successfully!');
    }
}
