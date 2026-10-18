<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart - Naeze Perfumes</title>
</head>
<body style="font-family: Arial, sans-serif; padding: 40px; background-color: #f9f9f9; color: #333;">
    
    @include('partials.navbar')

    <div style="max-width: 700px; margin: 30px auto; background: #fff; padding: 40px; border-radius: 8px; box-shadow: 0 4px 12px rgba(0,0,0,0.05);">
        <h1 style="color: #111; margin-top: 0; text-align: center;">Your Shopping Cart</h1>

        @if(session('success'))
            <div style="background: #e6f4ea; color: #137333; padding: 12px; border-radius: 4px; margin-bottom: 20px; text-align: center; font-size: 14px;">
                {{ session('success') }}
            </div>
        @endif

        @if(session('cart') && count(session('cart')) > 0)
            <table style="width: 100%; border-collapse: collapse; margin-bottom: 30px;">
                <thead>
                    <tr style="border-bottom: 2px solid #eee; text-align: left; font-size: 14px; color: #666;">
                        <th style="padding: 10px;">Perfume</th>
                        <th style="padding: 10px;">Category</th>
                        <th style="padding: 10px;">Price</th>
                        <th style="padding: 10px;">Quantity</th>
                        <th style="padding: 10px; text-align: right;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach(session('cart') as $id => $details)
                        <tr style="border-bottom: 1px solid #eee; font-size: 15px;">
                            <td style="padding: 15px 10px; font-weight: bold; color: #111;">{{ $details['name'] }}</td>
                            <td style="padding: 15px 10px; color: #666;">{{ $details['gender_category'] }}</td>
                            <td style="padding: 15px 10px; color: #333;">RM {{ number_format($details['price'], 2) }}</td>
                            <td style="padding: 15px 10px;">{{ $details['quantity'] }}</td>
                            <td style="padding: 15px 10px; text-align: right;">
                                <form action="{{ route('cart.remove', $id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" style="background: #ff4d4d; color: #fff; border: none; padding: 6px 12px; border-radius: 4px; cursor: pointer; font-size: 12px;">Remove</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div style="display: flex; justify-content: space-between; align-items: center; border-top: 2px solid #eee; padding-top: 20px;">
                <h3 style="margin: 0; font-size: 20px; color: #111;">Total: RM {{ number_format($total, 2) }}</h3>
                
                <form action="{{ route('cart.checkout') }}" method="POST">
                    @csrf
                    <button type="submit" style="background: #111; color: #fff; padding: 14px 28px; border: none; border-radius: 4px; font-weight: bold; font-size: 16px; cursor: pointer;">Proceed to Checkout</button>
                </form>
            </div>
        @else
            <p style="text-align: center; color: #666; font-size: 16px; margin: 40px 0;">Your cart is currently empty.</p>
            <div style="text-align: center;">
                <a href="/" style="background: #111; color: #fff; padding: 12px 24px; border-radius: 4px; text-decoration: none; font-weight: bold;">Explore Perfumes</a>
            </div>
        @endif
    </div>

</body>
</html>