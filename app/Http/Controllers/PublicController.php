<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function home()
    {
        $latestArticles = Article::with(['category', 'user'])
            ->latest()
            ->take(6)
            ->get();
            
        $popularArticles = Article::with(['category', 'user'])
            ->orderBy('views', 'desc')
            ->take(4)
            ->get();
            
        $featuredArticle = Article::with(['category', 'user'])
            ->latest()
            ->first();

        $categories = Category::withCount('articles')->get();

        return view('home', compact('latestArticles', 'popularArticles', 'featuredArticle', 'categories'));
    }

    public function articles(Request $request)
    {
        $query = Article::with(['category', 'user'])->latest();

        if ($request->filled('search')) {
            $search = $request->get('search');
            $query->where('title', 'like', "%{$search}%");
        }

        $articles = $query->paginate(9);

        return view('articles.index', compact('articles'));
    }

    public function articleShow($slug)
    {
        $article = Article::with(['category', 'user'])->where('slug', $slug)->firstOrFail();
        
        // Increment views
        $article->increment('views');

        $relatedArticles = Article::where('category_id', $article->category_id)
            ->where('id', '!=', $article->id)
            ->take(3)
            ->get();

        return view('articles.show', compact('article', 'relatedArticles'));
    }

    public function categories()
    {
        $categories = Category::withCount('articles')->get();
        return view('categories.index', compact('categories'));
    }

    public function categoryShow($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();
        $articles = Article::where('category_id', $category->id)->latest()->paginate(9);
        
        return view('categories.show', compact('category', 'articles'));
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }
}
