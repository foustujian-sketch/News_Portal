@extends('layouts.frontend')

@section('title', $category->name . ' Articles - Beautique')

@section('content')
    <div class="py-5 bg-light">
        <div class="container text-center">
            <span class="badge bg-primary mb-3">Category</span>
            <h1 class="display-4 fw-bold mb-3">{{ $category->name }}</h1>
            @if($category->description)
                <p class="lead text-muted mx-auto" style="max-width: 700px;">{{ $category->description }}</p>
            @endif
        </div>
    </div>

    <div class="py-5">
        <div class="container">
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
                                <h5 class="card-title mt-2">
                                    <a href="{{ route('articles.show', $article->slug) }}" class="article-title">{{ $article->title }}</a>
                                </h5>
                                <p class="card-text text-muted small">{{ $article->excerpt }}</p>
                            </div>
                            <div class="card-footer bg-white border-0 pb-3">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="small text-muted">
                                        {{ $article->published_at->format('M d, Y') }}
                                    </div>
                                    <a href="{{ route('articles.show', $article->slug) }}" class="btn btn-outline-primary btn-sm rounded-pill">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center py-5">
                        <i class="fas fa-newspaper fa-4x text-muted mb-4"></i>
                        <h3>No articles in this category yet</h3>
                        <p class="text-muted">We're working on bringing you the best content. Stay tuned!</p>
                        <a href="{{ route('articles.index') }}" class="btn btn-primary mt-3">Browse Other Articles</a>
                    </div>
                @endforelse
            </div>

            <div class="mt-5 d-flex justify-content-center">
                {{ $articles->links() }}
            </div>
        </div>
    </div>
@endsection
