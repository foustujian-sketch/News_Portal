@extends('layouts.frontend')

@section('title', 'All Articles - Beautique')

@section('content')
    <div class="py-5 bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h1 class="display-4 fw-bold">Beauty Articles</h1>
                    <p class="lead text-muted">Stay informed with the latest beauty news and tips.</p>
                </div>
                <div class="col-md-6">
                    <form action="{{ route('articles.index') }}" method="GET" class="mt-4 mt-md-0">
                        <div class="input-group input-group-lg shadow-sm">
                            <input type="text" name="search" class="form-control border-0" placeholder="Search for products, trends, tips..." value="{{ request('search') }}">
                            <button class="btn btn-primary px-4" type="submit"><i class="fas fa-search"></i> Search</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="py-5">
        <div class="container">
            @if(request('search'))
                <div class="mb-4">
                    <h4>Search Results for: <span class="text-primary">"{{ request('search') }}"</span></h4>
                    <p class="text-muted">Found {{ $articles->total() }} articles</p>
                </div>
            @endif

            <div class="row">
                @forelse($articles as $article)
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 shadow-sm border-0">
                            @if($article->thumbnail)
                                <img src="{{ asset('storage/' . $article->thumbnail) }}" class="article-thumbnail" alt="{{ $article->title }}">
                            @else
                                <div class="bg-light d-flex align-items-center justify-content-center article-thumbnail">
                                    <i class="fas fa-image text-muted fa-3x"></i>
                                </div>
                            @endif
                            <div class="card-body">
                                <a href="{{ route('categories.show', $article->category->slug) }}" class="category-badge mb-2 d-inline-block">{{ $article->category->name }}</a>
                                <h5 class="card-title mt-2">
                                    <a href="{{ route('articles.show', $article->slug) }}" class="article-title">{{ $article->title }}</a>
                                </h5>
                                <p class="card-text text-muted small">{{ $article->excerpt }}</p>
                            </div>
                            <div class="card-footer bg-white border-0 pb-3">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="small">
                                        <span class="text-dark fw-bold">{{ $article->user->name }}</span>
                                        <br>
                                        <span class="text-muted">{{ $article->published_at->format('M d, Y') }}</span>
                                    </div>
                                    <a href="{{ route('articles.show', $article->slug) }}" class="btn btn-outline-primary btn-sm rounded-pill">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center py-5">
                        <i class="fas fa-search fa-4x text-muted mb-4"></i>
                        <h3>No articles found</h3>
                        <p class="text-muted">Try using different keywords or browse our categories.</p>
                        <a href="{{ route('articles.index') }}" class="btn btn-primary mt-3">Reset Search</a>
                    </div>
                @endforelse
            </div>

            <div class="mt-5 d-flex justify-content-center">
                {{ $articles->appends(request()->query())->links() }}
            </div>
        </div>
    </div>
@endsection
