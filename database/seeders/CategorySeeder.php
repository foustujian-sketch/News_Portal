<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Foundation', 'slug' => 'foundation', 'description' => 'Perfect base for your makeup.'],
            ['name' => 'Cushion', 'slug' => 'cushion', 'description' => 'Lightweight and portable base.'],
            ['name' => 'Lipstick', 'slug' => 'lipstick', 'description' => 'Color your lips.'],
            ['name' => 'Lip Tint', 'slug' => 'lip-tint', 'description' => 'Natural lip color.'],
            ['name' => 'Blush', 'slug' => 'blush', 'description' => 'Add some color to your cheeks.'],
            ['name' => 'Concealer', 'slug' => 'concealer', 'description' => 'Hide those imperfections.'],
            ['name' => 'Eyebrow', 'slug' => 'eyebrow', 'description' => 'Shape your brows.'],
            ['name' => 'Mascara', 'slug' => 'mascara', 'description' => 'Longer lashes.'],
            ['name' => 'Eyeshadow', 'slug' => 'eyeshadow', 'description' => 'Color your eyes.'],
            ['name' => 'Makeup Tips', 'slug' => 'makeup-tips', 'description' => 'Best tips for beauty.'],
            ['name' => 'Beauty Trends', 'slug' => 'beauty-trends', 'description' => 'Stay updated with latest trends.'],
            ['name' => 'Product Reviews', 'slug' => 'product-reviews', 'description' => 'Honest reviews of beauty products.'],
        ];

        foreach ($categories as $category) {
            \App\Models\Category::create($category);
        }
    }
}
