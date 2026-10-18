<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

        // Generate a custom accord profile description
        $blendName = "Custom " . $top . " & " . $base . " Accord";
        $profile = "An exquisite bespoke creation combining the luminous, vibrant opening of {$top}, the romantic and sophisticated depth of {$heart}, anchored by the luxurious, long-lasting warmth of {$base}.";
        
        $longevity = (in_array($base, ['Dark Oud', 'Rich Amber'])) ? '8 - 12 Hours (Extrait Grade)' : '6 - 8 Hours (Eau de Parfum)';

        return view('layering.result', compact('top', 'heart', 'base', 'blendName', 'profile', 'longevity'));
    }
}