<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        // Clear old dummy data
        Product::truncate();

        $perfumes = [
            [
                'name' => 'Ace',
                'description' => 'A bold, fresh, and energetic extrait de parfum designed for the modern trailblazer.',
                'price' => 59.00,
                'gender_category' => 'Men'
            ],
            [
                'name' => 'Blush',
                'description' => 'A soft, charming floral fragrance blending delicate petals with a warm, inviting touch.',
                'price' => 59.00,
                'gender_category' => 'Women'
            ],
            [
                'name' => 'Eclara',
                'description' => 'An elegant and luminous scent combining radiant citrus freshness with sophisticated amber depth.',
                'price' => 59.00,
                'gender_category' => 'Unisex'
            ],
            [
                'name' => 'Femme Paradox',
                'description' => 'A captivating contrast of crisp floral brightness and deep, enigmatic sensual undertones.',
                'price' => 59.00,
                'gender_category' => 'Women'
            ],
            [
                'name' => 'Phantom',
                'description' => 'A dark, woody, and mysterious extrait de parfum that commands attention after dark.',
                'price' => 59.00,
                'gender_category' => 'Men'
            ],
            [
                'name' => 'Reign',
                'description' => 'A majestic and luxurious blend of rich woods, spices, and regal warmth.',
                'price' => 59.00,
                'gender_category' => 'Unisex'
            ],
            [
                'name' => 'Scarlet',
                'description' => 'A vibrant and passionate fragrance highlighting rich floral and sweet crimson notes.',
                'price' => 59.00,
                'gender_category' => 'Women'
            ],
            [
                'name' => 'Ultimate Desire',
                'description' => 'An alluring, warm, and deeply intoxicating scent crafted for unforgettable evenings.',
                'price' => 59.00,
                'gender_category' => 'Unisex'
            ]
        ];

        foreach ($perfumes as $perfume) {
            Product::create($perfume);
        }
    }
}