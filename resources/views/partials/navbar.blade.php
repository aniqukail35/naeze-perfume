@php
    $cartCount = 0;
    if(session('cart')) {
        foreach(session('cart') as $item) {
            $cartCount += $item['quantity'];
        }
    }
@endphp

<nav style="background: #111; color: #fff; padding: 15px 30px; display: flex; justify-content: space-between; align-items: center; margin-bottom: 30px; border-radius: 6px;">
    <div style="font-weight: bold; font-size: 18px; letter-spacing: 1px;">
        <a href="/" style="color: #fff; text-decoration: none;">NAEZE PERFUMES</a>
    </div>
    <div style="display: flex; gap: 25px; align-items: center;">
        <a href="/" style="color: #ccc; text-decoration: none; font-size: 14px; font-weight: bold;">Storefront</a>
        <a href="/quiz" style="color: #ccc; text-decoration: none; font-size: 14px; font-weight: bold;">Scent Quiz</a>
        <a href="/layering-lab" style="color: #ccc; text-decoration: none; font-size: 14px; font-weight: bold;">Layering Lab</a>
        <a href="/cart" style="color: #fff; text-decoration: none; font-size: 14px; font-weight: bold; display: flex; align-items: center; gap: 6px;">
            🛒 
            @if($cartCount > 0)
                <span style="background: #b22222; color: #fff; border-radius: 10px; padding: 1px 7px; font-size: 12px; font-weight: bold;">{{ $cartCount }}</span>
            @endif
        </a>
    </div>
</nav>