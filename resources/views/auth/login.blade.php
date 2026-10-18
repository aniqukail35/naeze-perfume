<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Naeze Perfumes</title>
</head>
<body style="font-family: Arial, sans-serif; padding: 40px; background-color: #f9f9f9; color: #333;">
    
    @include('partials.navbar')

    <div style="max-width: 400px; margin: 40px auto; background: #fff; padding: 40px; border-radius: 8px; box-shadow: 0 4px 12px rgba(0,0,0,0.05);">
        <h2 style="margin-top: 0; text-align: center; color: #111;">Sign In</h2>

        @if($errors->any())
            <div style="background: #fde8e8; color: #c53030; padding: 10px; border-radius: 4px; font-size: 13px; margin-bottom: 20px;">
                {{ $errors->first() }}
            </div>
        @endif

        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div style="margin-bottom: 15px;">
                <label style="display: block; font-size: 13px; font-weight: bold; margin-bottom: 5px; color: #555;">Email Address</label>
                <input type="email" name="email" value="{{ old('email') }}" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px; box-sizing: border-box;">
            </div>

            <div style="margin-bottom: 20px;">
                <label style="display: block; font-size: 13px; font-weight: bold; margin-bottom: 5px; color: #555;">Password</label>
                <input type="password" name="password" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px; box-sizing: border-box;">
            </div>

            <button type="submit" style="width: 100%; background: #111; color: #fff; padding: 12px; border: none; border-radius: 4px; font-weight: bold; cursor: pointer;">Login</button>
        </form>

        <p style="text-align: center; font-size: 14px; margin-top: 20px; color: #666;">
            Don't have an account? <a href="{{ route('register') }}" style="color: #111; font-weight: bold; text-decoration: underline;">Register here</a>
        </p>
    </div>

</body>
</html>