<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scent Quiz - Naeze Perfumes</title>
</head>
<body style="font-family: Arial, sans-serif; padding: 40px; text-align: center; background-color: #f9f9f9;">
    <h1>Find Your Signature Scent</h1>
    <p>Answer a quick question to discover your perfect Naeze Perfume match.</p>

    <form action="{{ route('quiz.recommend') }}" method="POST" style="max-width: 400px; margin: 30px auto; background: #fff; padding: 30px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.05); text-align: left;">
        @csrf
        <label style="font-weight: bold; display: block; margin-bottom: 10px;">Select your preferred scent category:</label>
        
        <div style="margin-bottom: 15px;">
            <input type="radio" name="gender" value="Men" required> Men's Collection (Bold, Woody, Fresh)<br>
            <input type="radio" name="gender" value="Women"> Women's Collection (Floral, Soft, Crimson)<br>
            <input type="radio" name="gender" value="Unisex"> Unisex Collection (Enigmatic, Warm, Luminous)
        </div>

        <button type="submit" style="width: 100%; background: #111; color: #fff; padding: 12px; border: none; border-radius: 4px; font-weight: bold; cursor: pointer;">Discover My Scent</button>
    </form>
    
    <p><a href="/" style="color: #666; text-decoration: none;">&larr; Back to Storefront</a></p>
</body>
</html>