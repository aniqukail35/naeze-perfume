<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $product->name }} - Naeze Perfumes</title>
</head>
<body style="font-family: Arial, sans-serif; padding: 40px; background-color: #f9f9f9; color: #333;">
    
    @include('partials.navbar')
<!-- Success Notification Banner -->
    @if(session('success'))
        <div style="max-width: 600px; margin: 0 auto 20px auto; background: #e6f4ea; color: #137333; border: 1px solid #ceead6; padding: 12px 20px; border-radius: 6px; text-align: center; font-size: 14px; font-weight: bold;">
            ✓ {{ session('success') }}
        </div>
    @endif
    <div style="max-width: 600px; margin: 30px auto; background: #fff; padding: 40px; border-radius: 8px; box-shadow: 0 4px 12px rgba(0,0,0,0.05);">
        <span style="background: #111; color: #fff; padding: 4px 10px; font-size: 12px; border-radius: 4px; text-transform: uppercase; letter-spacing: 1px;">{{ $product->gender_category }} Collection</span>
        
        <h1 style="color: #111; margin: 15px 0 10px; font-size: 32px;">{{ $product->name }}</h1>
        <p style="font-weight: bold; font-size: 22px; color: #b22222; margin-bottom: 20px;">RM {{ number_format($product->price, 2) }}</p>
        
        <div style="border-top: 1px solid #eee; border-bottom: 1px solid #eee; padding: 20px 0; margin-bottom: 25px;">
            <h3 style="margin-top: 0; font-size: 16px; color: #444;">Fragrance Description</h3>
            <p style="color: #666; font-size: 15px; line-height: 1.6; margin: 0;">{{ $product->description }}</p>
        </div>

        <div style="display: flex; gap: 15px;">
            <!-- Form wrapping the Add to Cart button -->
            <form action="{{ route('cart.add', $product->id) }}" method="POST" style="flex: 1;">
                @csrf
                <button type="submit" style="width: 100%; background: #111; color: #fff; padding: 14px; border: none; border-radius: 4px; font-weight: bold; font-size: 15px; cursor: pointer;">Add to Cart</button>
            </form>
            
            <a href="/" style="display: inline-block; background: #eee; color: #333; padding: 14px 20px; border-radius: 4px; text-decoration: none; font-weight: bold; text-align: center;">&larr; Back to Store</a>
        </div>
    </div>

</body>
</html>