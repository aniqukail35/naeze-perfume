<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signature Scent Quiz - Naeze Perfumes</title>
</head>
<body style="font-family: Arial, sans-serif; padding: 40px; background-color: #f9f9f9; color: #333;">
    @include('partials.navbar')
    <div style="max-width: 550px; margin: 0 auto; background: #fff; padding: 40px; border-radius: 8px; box-shadow: 0 4px 12px rgba(0,0,0,0.05);">
        <h1 style="text-align: center; margin-top: 0; color: #111;">Find Your Signature Scent</h1>
        <p style="text-align: center; color: #666; font-size: 14px; margin-bottom: 30px;">Answer 4 quick questions tailored to your lifestyle and discover your perfect Naeze Perfume match.</p>

        <form action="{{ route('quiz.recommend') }}" method="POST">
            @csrf

            <!-- Question 1: Hobby -->
            <div style="margin-bottom: 25px;">
                <label style="font-weight: bold; display: block; margin-bottom: 8px;">1. What is your primary hobby or weekend activity?</label>
                <select name="hobby" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px; background: #fff;">
                    <option value="" disabled selected>Select your hobby...</option>
                    <option value="Outdoors & Sports">Outdoors & Active Sports</option>
                    <option value="Creative Arts & Reading">Creative Arts, Writing & Reading</option>
                    <option value="Socializing & Nightlife">Socializing & Evening Gatherings</option>
                    <option value="Relaxing & Wellness">Relaxing, Spa & Self-Care</option>
                </select>
            </div>

            <!-- Question 2: Profession -->
            <div style="margin-bottom: 25px;">
                <label style="font-weight: bold; display: block; margin-bottom: 8px;">2. Which best describes your profession or work environment?</label>
                <select name="profession" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px; background: #fff;">
                    <option value="" disabled selected>Select your profession...</option>
                    <option value="Corporate & Office">Corporate & Professional Office</option>
                    <option value="Creative & Freelance">Creative, Design & Entrepreneurial</option>
                    <option value="Active & Fieldwork">Active, Fieldwork & Travel</option>
                    <option value="Evening & Hospitality">Evening Events & Hospitality</option>
                </select>
            </div>

            <!-- Question 3: Scent Intensity -->
            <div style="margin-bottom: 25px;">
                <label style="font-weight: bold; display: block; margin-bottom: 8px;">3. What scent style do you lean toward?</label>
                <div style="padding-left: 5px;">
                    <label style="display: block; margin-bottom: 6px; cursor: pointer;">
                        <input type="radio" name="intensity" value="bold" required style="margin-right: 8px;"> 
                        <strong>Bold & Intense</strong> (Deep woods, spices, commanding presence)
                    </label>
                    <label style="display: block; cursor: pointer;">
                        <input type="radio" name="intensity" value="airy" style="margin-right: 8px;"> 
                        <strong>Airy & Soft</strong> (Light florals, refreshing citrus, smooth warmth)
                    </label>
                </div>
            </div>

            <!-- Question 4: Priority -->
            <div style="margin-bottom: 30px;">
                <label style="font-weight: bold; display: block; margin-bottom: 8px;">4. What is your top priority when wearing a fragrance?</label>
                <div style="padding-left: 5px;">
                    <label style="display: block; margin-bottom: 6px; cursor: pointer;">
                        <input type="radio" name="priority" value="scent" required style="margin-right: 8px;"> 
                        <strong>Scent-wise:</strong> Unique notes, elegant composition & emotional vibe
                    </label>
                    <label style="display: block; cursor: pointer;">
                        <input type="radio" name="priority" value="performance" style="margin-right: 8px;"> 
                        <strong>Performance-wise:</strong> Maximum longevity, heavy projection & sillage
                    </label>
                </div>
            </div>

            <button type="submit" style="width: 100%; background: #111; color: #fff; padding: 14px; border: none; border-radius: 4px; font-weight: bold; font-size: 16px; cursor: pointer;">Discover My Custom Scent</button>
        </form>
        
        <div style="text-align: center; margin-top: 20px;">
            <a href="/" style="color: #666; text-decoration: none; font-size: 14px;">&larr; Back to Storefront</a>
        </div>
    </div>

</body>
</html>