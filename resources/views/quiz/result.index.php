<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Naeze Perfumes - Your Recommendations</title>
</head>
<body style="font-family: Arial, sans-serif; padding: 40px; text-align: center; background-color: #f9f9f9;">

    <h1>Your Personalized Recommendations</h1>
    <p style="color: #666;">Based on your preference for a <strong style="color: #333; text-transform: uppercase;">{{ $vibe }}</strong> vibe, here are our top picks for you:</p>

    <div style="display: flex; justify-content: center; gap: 20px; margin-top: 30px; flex-wrap: wrap;">
        @foreach($recommendations as $product)
            <div style="border: 1px solid #ddd; padding: 20px; border-radius: 8px; width: 250px; text-align: left; background: #fff; box-shadow: 0 2px 4px rgba(0,0,0,0.05);">
                <h3 style="margin-top: 0; color: #333;">{{ $product->name }}</h3>
                <p style="color: #666; font-size: 14px; min-height: 40px;">{{ $product->description }}</p>
                <p style="font-weight: bold; color: #b22222; font-size: 16px;">RM {{ number_format($product->price, 2) }}</p>
                <span style="background: #eee; padding: 4px 8px; font-size: 12px; border-radius: 4px; color: #555;">{{ $product->gender_category }}</span>
            </div>
        @endforeach
    </div>

    <div style="margin-top: 40px;">
        <a href="/quiz" style="color: #b22222; text-decoration: none; font-weight: bold;">Take Quiz Again</a> | 
        <a href="/" style="color: #333; text-decoration: none; margin-left: 15px;">Back to Storefront</a>
    </div>

</body>
</html>