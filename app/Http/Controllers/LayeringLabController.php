<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class LayeringLabController extends Controller
{
    public function index()
    {
        $topNotes = ['Bergamot', 'Crisp Apple', 'Lemon Zest', 'Pink Pepper'];
        $heartNotes = ['Rose Petals', 'Jasmine Bloom', 'Lavender', 'Warm Spices'];
        $baseNotes = ['Rich Amber', 'Sensual Musk', 'Dark Oud', 'Vanilla Bean'];

        return view('layering.index', compact('topNotes', 'heartNotes', 'baseNotes'));
    }

    public function blend(Request $request)
    {
        $top = $request->input('top_note', 'Citrus');
        $heart = $request->input('heart_note', 'Floral');
        $base = $request->input('base_note', 'Amber');

        // Generate custom accord details
        $blendName = "Custom " . $top . " & " . $base . " Accord";
        $profile = "An exquisite bespoke creation combining the luminous, vibrant opening of {$top}, the romantic and sophisticated depth of {$heart}, anchored by the luxurious, long-lasting warmth of {$base}.";
        
        $longevity = (in_array($base, ['Dark Oud', 'Rich Amber'])) ? '8 - 12 Hours (Extrait Grade)' : '6 - 8 Hours (Eau de Parfum)';

        // Smart Product Pairing: Match recommended products based on the chosen base note style
        if (in_array($base, ['Dark Oud', 'Rich Amber'])) {
            // Suggest bold/woody/intense collection bottles
            $suggestedProducts = Product::whereIn('name', ['Phantom', 'Reign', 'Ultimate Desire', 'Ace'])->take(2)->get();
        } else {
            // Suggest soft/floral/luminous collection bottles
            $suggestedProducts = Product::whereIn('name', ['Blush', 'Eclara', 'Femme Paradox', 'Scarlet'])->take(2)->get();
        }

        // Fallback if collection query returns fewer than 2 items
        if ($suggestedProducts->count() < 2) {
            $suggestedProducts = Product::inRandomOrder()->take(2)->get();
        }

        return view('layering.result', compact('top', 'heart', 'base', 'blendName', 'profile', 'longevity', 'suggestedProducts'));
    }
}