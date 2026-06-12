@extends('layouts.frontend')

@section('title', 'Beautique - Discover Beauty, Share Confidence')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section py-5" style="background-color: var(--secondary-color);">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0" data-aos="fade-right">
                    <span class="badge bg-primary mb-3">Beauty Journal</span>
                    <h1 class="display-3 fw-bold mb-4">Discover Your <br><span style="color: var(--primary-color);">Glow</span> Today</h1>
                    <p class="lead mb-4">Explore the latest makeup trends, expert reviews, and beauty tips tailored just for you.</p>
                    <a href="{{ route('articles.index') }}" class="btn btn-primary btn-lg rounded-pill px-5">Explore Articles</a>
                </div>
                <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="200">
                    <img src="https://images.unsplash.com/photo-1522335789203-aabd1fc54bc9?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Beauty Hero" class="img-fluid rounded-3 shadow-lg">
                </div>
            </div>
        </div>
    </section>

    <!-- Latest Articles -->
    <section class="py-5">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center mb-4" data-aos="fade-up">
                <h2 class="mb-0">Latest Beauty News</h2>
                <a href="{{ route('articles.index') }}" class="text-primary text-decoration-none">View All <i class="fas fa-arrow-right ms-1"></i></a>
            </div>
            <div class="row">
                @foreach($latestArticles as $index => $article)
                    <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="{{ 100 * ($index + 1) }}">
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
                                <div class="d-flex align-items-center">
                                    <div class="small">
                                        <span class="text-dark fw-bold">{{ $article->user->name }}</span>
                                        <span class="text-muted mx-1">&bull;</span>
                                        <span class="text-muted">{{ $article->published_at->format('M d, Y') }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Popular Categories -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5" data-aos="fade-down">Makeup Categories</h2>
            <div class="row g-4">
                @foreach($categories as $index => $category)
                    <div class="col-6 col-md-3 col-lg-2" data-aos="zoom-in" data-aos-delay="{{ 50 * ($index + 1) }}">
                        <a href="{{ route('categories.show', $category->slug) }}" class="text-center text-decoration-none d-block p-3 bg-white rounded-3 shadow-sm hover-shadow h-100">
                            <div class="mb-3">
                                @if($category->image)
                                    <img src="{{ asset('storage/' . $category->image) }}" alt="{{ $category->name }}" class="rounded-circle shadow-sm" style="width: 70px; height: 70px; object-fit: cover;">
                                @else
                                    <div class="bg-light rounded-circle d-flex align-items-center justify-content-center mx-auto shadow-sm" style="width: 70px; height: 70px;">
                                        <i class="fas fa-magic fa-2x text-primary"></i>
                                    </div>
                                @endif
                            </div>
                            <h6 class="mb-1 text-dark fw-bold text-truncate">{{ $category->name }}</h6>
                            <small class="text-muted" style="font-size: 0.75rem;">{{ $category->articles_count }} Articles</small>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Featured Post -->
    @if($featuredArticle)
    <section class="py-5">
        <div class="container">
            <div class="bg-dark text-white rounded-4 overflow-hidden shadow-lg" data-aos="flip-up">
                <div class="row g-0">
                    <div class="col-lg-6">
                        @if($featuredArticle->thumbnail)
                            <img src="{{ asset('storage/' . $featuredArticle->thumbnail) }}" alt="{{ $featuredArticle->title }}" class="img-fluid h-100" style="object-fit: cover;">
                        @else
                            <div class="bg-secondary d-flex align-items-center justify-content-center h-100" style="min-height: 300px;">
                                <i class="fas fa-star fa-5x text-white-50"></i>
                            </div>
                        @endif
                    </div>
                    <div class="col-lg-6 p-5 d-flex flex-column justify-content-center">
                        <span class="badge bg-primary mb-3 align-self-start">Featured Post</span>
                        <h2 class="display-5 mb-4">{{ $featuredArticle->title }}</h2>
                        <p class="lead mb-4 text-white-50">{{ $featuredArticle->excerpt }}</p>
                        <a href="{{ route('articles.show', $featuredArticle->slug) }}" class="btn btn-outline-light rounded-pill px-4 align-self-start">Read Full Story</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif
@endsection
