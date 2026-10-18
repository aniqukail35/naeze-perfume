<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layering Lab - Naeze Perfumes</title>
</head>
<body style="font-family: Arial, sans-serif; padding: 40px; background-color: #f9f9f9; color: #333;">
    
    <div style="max-width: 600px; margin: 0 auto; background: #fff; padding: 40px; border-radius: 8px; box-shadow: 0 4px 12px rgba(0,0,0,0.05);">
        <h1 style="text-align: center; margin-top: 0; color: #111;">Fragrance Note Layering Lab</h1>
        <p style="text-align: center; color: #666; font-size: 14px; margin-bottom: 30px;">Design your own custom bespoke perfume by selecting your ideal Top, Heart, and Base notes.</p>

        <form action="{{ route('layering.blend') }}" method="POST">
            @csrf

            <!-- Top Notes -->
            <div style="margin-bottom: 25px;">
                <label style="font-weight: bold; display: block; margin-bottom: 8px; color: #b22222;">1. Select Top Note (The Opening Scent):</label>
                <select name="top_note" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px; background: #fff;">
                    <option value="" disabled selected>Choose top note...</option>
                    <option value="Bergamot">Bergamot (Bright & Zesty)</option>
                    <option value="Crisp Apple">Crisp Apple (Fruity & Fresh)</option>
                    <option value="Lemon Zest">Lemon Zest (Energetic & Citrus)</option>
                    <option value="Pink Pepper">Pink Pepper (Spicy & Vibrant)</option>
                </select>
            </div>

            <!-- Heart Notes -->
            <div style="margin-bottom: 25px;">
                <label style="font-weight: bold; display: block; margin-bottom: 8px; color: #b22222;">2. Select Heart / Middle Note (The Core Character):</label>
                <select name="heart_note" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px; background: #fff;">
                    <option value="" disabled selected>Choose heart note...</option>
                    <option value="Rose Petals">Rose Petals (Classic Floral Elegance)</option>
                    <option value="Jasmine Bloom">Jasmine Bloom (Luminous & Rich)</option>
                    <option value="Lavender">Lavender (Aromatic & Clean)</option>
                    <option value="Warm Spices">Warm Spices (Exotic & Intriguing)</option>
                </select>
            </div>

            <!-- Base Notes -->
            <div style="margin-bottom: 30px;">
                <label style="font-weight: bold; display: block; margin-bottom: 8px; color: #b22222;">3. Select Base Note (The Lasting Foundation):</label>
                <select name="base_note" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px; background: #fff;">
                    <option value="" disabled selected>Choose base note...</option>
                    <option value="Rich Amber">Rich Amber (Warm & Resinous)</option>
                    <option value="Sensual Musk">Sensual Musk (Deep & Intimate)</option>
                    <option value="Dark Oud">Dark Oud (Woody & Mysterious)</option>
                    <option value="Vanilla Bean">Vanilla Bean (Sweet & Creamy)</option>
                </select>
            </div>

            <button type="submit" style="width: 100%; background: #111; color: #fff; padding: 14px; border: none; border-radius: 4px; font-weight: bold; font-size: 16px; cursor: pointer;">Blend My Custom Fragrance</button>
        </form>
        
        <div style="text-align: center; margin-top: 20px;">
            <a href="/" style="color: #666; text-decoration: none; font-size: 14px;">&larr; Back to Storefront</a>
        </div>
    </div>

</body>
</html>