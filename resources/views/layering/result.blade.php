<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Custom Blend & Pairings - Naeze Perfumes</title>
</head>
<body style="font-family: Arial, sans-serif; padding: 40px; background-color: #f9f9f9; color: #333; text-align: center;">
    @include('partials.navbar')
    <div style="max-width: 600px; margin: 0 auto; background: #fff; padding: 40px; border-radius: 8px; box-shadow: 0 4px 12px rgba(0,0,0,0.05);">
        <p style="text-transform: uppercase; letter-spacing: 2px; font-size: 12px; color: #888; margin-bottom: 5px;">Layering Lab Results</p>
        <h1 style="color: #111; margin-top: 0;">{{ $blendName }}</h1>
        
        <!-- Accord Profile Box -->
        <div style="border: 1px solid #eee; padding: 25px; border-radius: 6px; margin: 25px 0; background: #fafafa; text-align: left;">
            <p style="color: #555; font-size: 15px; line-height: 1.6; margin-top: 0;">{{ $profile }}</p>
            
            <hr style="border: none; border-top: 1px solid #eee; margin: 15px 0;">
            
            <div style="font-size: 13px; color: #666;">
                <p style="margin: 4px 0;"><strong>Top Note:</strong> {{ $top }}</p>
                <p style="margin: 4px 0;"><strong>Heart Note:</strong> {{ $heart }}</p>
                <p style="margin: 4px 0;"><strong>Base Note:</strong> {{ $base }}</p>
                <p style="margin: 10px 0 0; color: #b22222;"><strong>Estimated Performance:</strong> {{ $longevity }}</p>
            </div>
        </div>

        <!-- Product Pairing Suggestion Section -->
        <div style="text-align: left; margin: 30px 0; background: #fff5f5; border: 1px solid #ffd8d8; padding: 20px; border-radius: 6px;">
            <h3 style="color: #b22222; margin-top: 0; font-size: 16px; text-align: center;">✨ Recreate This Accord With Naeze Bottles</h3>
            <p style="font-size: 13px; color: #555; text-align: center; margin-bottom: 20px;">Layer these signature perfumes together in a 1:1 spray ratio to achieve your custom blend:</p>
            
            <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
                @foreach($suggestedProducts as $index => $product)
                    <div style="background: #fff; border: 1px solid #eee; padding: 15px; border-radius: 6px; width: 42%; box-shadow: 0 2px 4px rgba(0,0,0,0.02);">
                        <span style="font-size: 11px; color: #888; text-transform: uppercase;">Bottle {{ $index + 1 }}</span>
                        <h4 style="margin: 5px 0; color: #111; font-size: 16px;">{{ $product->name }}</h4>
                        <p style="font-size: 12px; color: #666; height: 35px; overflow: hidden; margin: 5px 0 10px;">{{ $product->description }}</p>
                        <p style="font-weight: bold; font-size: 14px; color: #333; margin: 0;">RM {{ number_format($product->price, 2) }}</p>
                    </div>
                @endforeach
            </div>
        </div>

        <div>
            <a href="/layering-lab" style="display: inline-block; background: #111; color: #fff; padding: 10px 20px; border-radius: 4px; text-decoration: none; font-weight: bold; margin-right: 10px;">Create Another Blend</a>
            <a href="/" style="display: inline-block; background: #eee; color: #333; padding: 10px 20px; border-radius: 4px; text-decoration: none; font-weight: bold;">Back to Store</a>
        </div>
    </div>

</body>
</html>