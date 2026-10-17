<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class QuizController extends Controller
{
    public function index()
    {
        return view('quiz.index');
    }

    public function recommend(Request $request)
    {
        $gender = $request->input('gender', 'Unisex');

        // Find a matching product based on preference, or fall back to any product
        $product = Product::where('gender_category', $gender)->inRandomOrder()->first();
        
        if (!$product) {
            $product = Product::inRandomOrder()->first();
        }

        return view('quiz.result', compact('product'));
    }
}