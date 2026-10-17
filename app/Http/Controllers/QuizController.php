<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    // Display the quiz questions form
    public function showQuiz()
    {
        return view('quiz.index');
    }

    // Process quiz answers and recommend products
    public function calculateRecommendation(Request $request)
    {
        $vibe = $request->input('vibe'); // e.g., 'fresh', 'floral', 'woody'

        // Match recommendations based on product description keywords
        $recommendations = Product::where('description', 'like', '%' . $vibe . '%')->get();

        // Fallback if no direct match is found
        if($recommendations->isEmpty()) {
            $recommendations = Product::take(2)->get();
        }

        return view('quiz.result', compact('recommendations', 'vibe'));
    }
}