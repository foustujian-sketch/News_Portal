<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = \App\Models\Category::all();
        $user = \App\Models\User::first();

        foreach ($categories as $category) {
            \App\Models\Article::create([
                'category_id' => $category->id,
                'user_id' => $user->id,
                'title' => 'Top 5 ' . $category->name . ' for 2026',
                'slug' => \Illuminate\Support\Str::slug('Top 5 ' . $category->name . ' for 2026'),
                'thumbnail' => null,
                'excerpt' => 'Discover the best ' . $category->name . ' products that are trending right now.',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
                'views' => rand(100, 1000),
                'published_at' => now(),
            ]);
        }
    }
}
