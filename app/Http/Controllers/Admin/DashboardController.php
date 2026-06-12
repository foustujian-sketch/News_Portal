<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalArticles = Article::count();
        $totalCategories = Category::count();
        $totalUsers = User::count();
        $latestArticles = Article::with(['category', 'user'])->latest()->take(5)->get();

        return view('admin.dashboard', compact('totalArticles', 'totalCategories', 'totalUsers', 'latestArticles'));
    }
}
