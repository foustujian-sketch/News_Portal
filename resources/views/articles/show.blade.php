@extends('layouts.frontend')

@section('title', $article->title . ' - Beautique')

@section('content')
    <article class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <nav aria-label="breadcrumb" class="mb-4">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('articles.index') }}">Articles</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $article->title }}</li>
                        </ol>
                    </nav>

                    <a href="{{ route('categories.show', $article->category->slug) }}" class="category-badge mb-3 d-inline-block">{{ $article->category->name }}</a>
                    <h1 class="display-4 fw-bold mb-4">{{ $article->title }}</h1>

                    <div class="d-flex align-items-center mb-5 p-3 bg-light rounded-3">
                        <div class="flex-shrink-0">
                            <div class="rounded-circle bg-primary text-white d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                <i class="fas fa-user"></i>
                            </div>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h6 class="mb-0 fw-bold">{{ $article->user->name }}</h6>
                            <small class="text-muted">Published on {{ $article->published_at->format('F d, Y') }} &bull; {{ $article->views }} views</small>
                        </div>
                        <div class="share-buttons">
                            <a href="#" class="text-muted me-2"><i class="fab fa-facebook"></i></a>
                            <a href="#" class="text-muted me-2"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="text-muted"><i class="fas fa-link"></i></a>
                        </div>
                    </div>

                    @if($article->thumbnail)
                        <img src="{{ asset('storage/' . $article->thumbnail) }}" class="article-detail-image shadow mb-5" alt="{{ $article->title }}">
                    @endif

                    <div class="article-content lead-text mb-5" style="line-height: 1.8; font-size: 1.1rem;">
                        {!! nl2br(e($article->content)) !!}
                    </div>

                    <hr class="my-5">

                    <!-- Related Articles -->
                    <h3 class="mb-4">Related Articles</h3>
                    <div class="row">
                        @foreach($relatedArticles as $related)
                            <div class="col-md-4 mb-4">
                                <div class="card h-100 border-0 shadow-sm">
                                    @if($related->thumbnail)
                                        <img src="{{ asset('storage/' . $related->thumbnail) }}" class="article-thumbnail" alt="{{ $related->title }}">
                                    @endif
                                    <div class="card-body p-3">
                                        <h6 class="card-title">
                                            <a href="{{ route('articles.show', $related->slug) }}" class="article-title small fw-bold">{{ $related->title }}</a>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="col-lg-4 mt-5 mt-lg-0">
                    <div class="sticky-top" style="top: 100px;">
                        <div class="card shadow-sm border-0 mb-4">
                            <div class="card-body">
                                <h5 class="mb-3 border-bottom pb-2">Top Categories</h5>
                                <ul class="list-unstyled">
                                    @foreach(\App\Models\Category::withCount('articles')->orderBy('articles_count', 'desc')->take(8)->get() as $cat)
                                        <li class="mb-2">
                                            <a href="{{ route('categories.show', $cat->slug) }}" class="text-decoration-none d-flex justify-content-between align-items-center text-dark hover-primary">
                                                <div class="d-flex align-items-center">
                                                    @if($cat->image)
                                                        <img src="{{ asset('storage/' . $cat->image) }}" alt="{{ $cat->name }}" class="rounded-circle me-2" style="width: 30px; height: 30px; object-fit: cover;">
                                                    @else
                                                        <div class="bg-light rounded-circle d-flex align-items-center justify-content-center me-2" style="width: 30px; height: 30px;">
                                                            <i class="fas fa-tag text-muted small"></i>
                                                        </div>
                                                    @endif
                                                    <span>{{ $cat->name }}</span>
                                                </div>
                                                <span class="badge bg-light text-primary rounded-pill">{{ $cat->articles_count }}</span>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>
@endsection
