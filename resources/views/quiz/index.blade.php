<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Naeze Perfumes - Scent Finder Quiz</title>
</head>
<body style="font-family: Arial, sans-serif; padding: 40px; text-align: center; background-color: #f9f9f9;">

    <div style="max-width: 600px; margin: 0 auto; background: #fff; padding: 30px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.05);">
        <h1>Find Your Signature Scent</h1>
        <p style="color: #666; margin-bottom: 30px;">Answer a quick question to discover the perfume that matches your lifestyle.</p>

        <form action="{{ route('quiz.submit') }}" method="POST" style="text-align: left;">
            @csrf
            <h3 style="color: #333; margin-bottom: 15px;">What is your preferred daily vibe or mood?</h3>
            
            <div style="margin-bottom: 12px;">
                <label style="cursor: pointer;"><input type="radio" name="vibe" value="fresh" required> Fresh & Energetic (Sporty, zesty, clean)</label>
            </div>
            <div style="margin-bottom: 12px;">
                <label style="cursor: pointer;"><input type="radio" name="vibe" value="floral" required> Elegant & Floral (Luxurious, romantic, evening wear)</label>
            </div>
            <div style="margin-bottom: 20px;">
                <label style="cursor: pointer;"><input type="radio" name="vibe" value="woody" required> Warm & Woody (Rich, deep, subtle spices)</label>
            </div>

            <button type="submit" style="background: #b22222; color: white; border: none; padding: 12px 20px; border-radius: 4px; font-size: 16px; cursor: pointer; width: 100%;">Get Recommendations</button>
        </form>
    </div>

</body>
</html>