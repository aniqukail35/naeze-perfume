<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Scent Match - Naeze Perfumes</title>
</head>
<body style="font-family: Arial, sans-serif; padding: 40px; text-align: center; background-color: #f9f9f9;">
    <h1>Your Perfect Match Is</h1>
    
    <div style="max-width: 400px; margin: 30px auto; background: #fff; padding: 30px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.05);">
        <h2 style="color: #b22222; margin-top: 0;">{{ $product->name }}</h2>
        <p style="color: #666; font-size: 15px; line-height: 1.5;">{{ $product->description }}</p>
        <p style="font-weight: bold; font-size: 18px; color: #333;">RM {{ number_format($product->price, 2) }}</p>
        <span style="background: #eee; padding: 4px 10px; font-size: 12px; border-radius: 4px; color: #555;">{{ $product->gender_category }}</span>
    </div>

    <div style="margin-top: 20px;">
        <a href="/quiz" style="margin-right: 15px; color: #111; text-decoration: underline;">Retake Quiz</a>
        <a href="/" style="color: #111; text-decoration: underline;">Back to Storefront</a>
    </div>
</body>
</html>