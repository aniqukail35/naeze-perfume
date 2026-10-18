<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Scent Match - Naeze Perfumes</title>
</head>
<body style="font-family: Arial, sans-serif; padding: 40px; text-align: center; background-color: #f9f9f9; color: #333;">
    
    <div style="max-width: 450px; margin: 0 auto; background: #fff; padding: 40px; border-radius: 8px; box-shadow: 0 4px 12px rgba(0,0,0,0.05);">
        <p style="text-transform: uppercase; letter-spacing: 2px; font-size: 12px; color: #888; margin-bottom: 5px;">Your Personalized Recommendation</p>
        <h1 style="color: #111; margin-top: 0;">The Perfect Match For You</h1>
        
        <div style="border: 1px solid #eee; padding: 25px; border-radius: 6px; margin: 25px 0; background: #fafafa;">
            <h2 style="color: #b22222; margin-top: 0; font-size: 24px;">{{ $product->name }}</h2>
            <p style="color: #555; font-size: 15px; line-height: 1.6;">{{ $product->description }}</p>
            <p style="font-weight: bold; font-size: 20px; color: #111; margin: 15px 0 10px;">RM {{ number_format($product->price, 2) }}</p>
            <span style="background: #111; color: #fff; padding: 5px 12px; font-size: 12px; border-radius: 4px; text-transform: uppercase; letter-spacing: 1px;">{{ $product->gender_category }} Collection</span>
        </div>

        <div style="font-size: 13px; color: #666; margin-bottom: 25px; text-align: left; background: #fdfdfd; padding: 12px; border-radius: 4px; border: 1px solid #eee;">
            <strong>Your Profile:</strong>
            <ul style="margin: 5px 0 0 20px; padding: 0;">
                <li>Hobby: {{ $hobby }}</li>
                <li>Profession: {{ $profession }}</li>
                <li>Style: {{ ucfirst($intensity) }} & {{ ucfirst($priority) }}-focused</li>
            </ul>
        </div>

        <div>
            <a href="/quiz" style="display: inline-block; background: #111; color: #fff; padding: 10px 20px; border-radius: 4px; text-decoration: none; font-weight: bold; margin-right: 10px;">Retake Quiz</a>
            <a href="/" style="display: inline-block; background: #eee; color: #333; padding: 10px 20px; border-radius: 4px; text-decoration: none; font-weight: bold;">Back to Store</a>
        </div>
    </div>

</body>
</html>