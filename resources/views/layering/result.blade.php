<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Custom Blend - Naeze Perfumes</title>
</head>
<body style="font-family: Arial, sans-serif; padding: 40px; background-color: #f9f9f9; color: #333; text-align: center;">
    
    <div style="max-width: 500px; margin: 0 auto; background: #fff; padding: 40px; border-radius: 8px; box-shadow: 0 4px 12px rgba(0,0,0,0.05);">
        <p style="text-transform: uppercase; letter-spacing: 2px; font-size: 12px; color: #888; margin-bottom: 5px;">Layering Lab Results</p>
        <h1 style="color: #111; margin-top: 0;">{{ $blendName }}</h1>
        
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

        <div>
            <a href="/layering-lab" style="display: inline-block; background: #111; color: #fff; padding: 10px 20px; border-radius: 4px; text-decoration: none; font-weight: bold; margin-right: 10px;">Create Another Blend</a>
            <a href="/" style="display: inline-block; background: #eee; color: #333; padding: 10px 20px; border-radius: 4px; text-decoration: none; font-weight: bold;">Back to Store</a>
        </div>
    </div>

</body>
</html>