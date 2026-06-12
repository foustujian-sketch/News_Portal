@extends('layouts.frontend')

@section('title', 'Beauty Categories - Beautique')

@section('content')
    <div class="py-5 bg-light">
        <div class="container text-center">
            <h1 class="display-4 fw-bold mb-3">Explore Categories</h1>
            <p class="lead text-muted mx-auto" style="max-width: 700px;">From skincare secrets to makeup masterpieces, find everything you need organized by your favorite topics.</p>
        </div>
    </div>

    <div class="py-5">
        <div class="container">
            <div class="row g-4">
                @foreach($categories as $category)
                    <div class="col-md-4 col-lg-3">
                        <div class="card h-100 shadow-sm border-0 text-center p-4">
                            <div class="mb-3">
                                @if($category->image)
                                    <img src="{{ asset('storage/' . $category->image) }}" alt="{{ $category->name }}" class="rounded-circle shadow-sm mx-auto" style="width: 100px; height: 100px; object-fit: cover;">
                                @else
                                    <div class="bg-light rounded-circle d-flex align-items-center justify-content-center mx-auto shadow-sm" style="width: 100px; height: 100px;">
                                        <i class="fas fa-magic fa-3x text-primary"></i>
                                    </div>
                                @endif
                            </div>
                            <h4 class="mb-2">{{ $category->name }}</h4>
                            <p class="text-muted small mb-4">{{ $category->description ?? 'Explore the latest articles in ' . $category->name . '.' }}</p>
                            <div class="mt-auto">
                                <span class="badge bg-light text-dark border border-primary rounded-pill mb-3">{{ $category->articles_count }} Articles</span>
                                <br>
                                <a href="{{ route('categories.show', $category->slug) }}" class="btn btn-outline-primary rounded-pill w-100">Browse Articles</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
