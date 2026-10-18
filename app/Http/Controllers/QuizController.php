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
        // Capture inputs from the 4 new quiz questions
        $hobby = $request->input('hobby');
        $profession = $request->input('profession');
        $intensity = $request->input('intensity'); // 'bold' or 'airy'
        $priority = $request->input('priority');   // 'scent' or 'performance'

        $query = Product::query();

        // Match based on scent intensity preference
        if ($intensity === 'bold') {
            // Curated bold/intense/woody selections
            $query->whereIn('name', ['Phantom', 'Ace', 'Reign', 'Ultimate Desire']);
        } else {
            // Curated airy/soft/floral selections
            $query->whereIn('name', ['Blush', 'Eclara', 'Femme Paradox', 'Scarlet']);
        }

        $product = $query->inRandomOrder()->first();

        // Fallback safety net if query returns nothing
        if (!$product) {
            $product = Product::inRandomOrder()->first();
        }

        return view('quiz.result', compact('product', 'hobby', 'profession', 'intensity', 'priority'));
    }
}