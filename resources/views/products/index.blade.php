<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Naeze Perfumes - Storefront</title>
</head>
<body style="font-family: Arial, sans-serif; padding: 40px; text-align: center; background-color: #f9f9f9;">
    @include('partials.navbar')
    <h1>Welcome to Naeze Perfumes</h1>
    <p>Discover your signature scent with our curated collection.</p>

    <!-- Debug message to check if products exist -->
    <p style="color: #888; font-size: 14px; margin-top: 10px;">Total products found: {{ $products->count() }}</p>

    <div style="display: flex; justify-content: center; gap: 20px; margin-top: 30px; flex-wrap: wrap;">
        @forelse($products as $product)
            <div style="border: 1px solid #ddd; padding: 20px; border-radius: 8px; width: 250px; text-align: left; background: #fff; box-shadow: 0 2px 4px rgba(0,0,0,0.05);">
                <h3 style="margin-top: 0; color: #333;">{{ $product->name }}</h3>
                <p style="color: #666; font-size: 14px; min-height: 40px;">{{ $product->description }}</p>
                <p style="font-weight: bold; color: #b22222; font-size: 16px;">RM {{ number_format($product->price, 2) }}</p>
                <span style="background: #eee; padding: 4px 8px; font-size: 12px; border-radius: 4px; color: #555;">{{ $product->gender_category }}</span>
            </div>
        @empty
            <p style="color: red; font-weight: bold;">No products found in the database yet!</p>
        @endforelse
    </div>

</body>
</html>