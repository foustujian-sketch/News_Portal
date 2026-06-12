@extends('layouts.admin')

@section('title', 'Dashboard - Beautique Admin')

@section('content')
    <div class="row">
        <div class="col-md-12 mb-4">
            <h2 class="fw-bold">Dashboard</h2>
            <p class="text-muted">Welcome back to the Beautique administration panel.</p>
        </div>
    </div>

    <div class="row mb-4">
        <div class="col-md-4" data-aos="fade-right" data-aos-delay="100">
            <div class="card bg-primary text-white">
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="text-uppercase mb-2">Total Articles</h6>
                            <h2 class="display-4 fw-bold mb-0">{{ $totalArticles }}</h2>
                        </div>
                        <i class="fas fa-file-alt fa-3x text-white-50"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
            <div class="card bg-success text-white">
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="text-uppercase mb-2">Total Categories</h6>
                            <h2 class="display-4 fw-bold mb-0">{{ $totalCategories }}</h2>
                        </div>
                        <i class="fas fa-tags fa-3x text-white-50"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4" data-aos="fade-left" data-aos-delay="300">
            <div class="card bg-info text-white">
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="text-uppercase mb-2">Total Users</h6>
                            <h2 class="display-4 fw-bold mb-0">{{ $totalUsers }}</h2>
                        </div>
                        <i class="fas fa-users fa-3x text-white-50"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12" data-aos="fade-up" data-aos-delay="400">
            <div class="card">
                <div class="card-header bg-white d-flex justify-content-between align-items-center py-3">
                    <h5 class="mb-0 fw-bold">Latest Articles</h5>
                    <a href="{{ route('admin.articles.index') }}" class="btn btn-primary btn-sm">View All</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th>Author</th>
                                    <th>Views</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($latestArticles as $article)
                                    <tr>
                                        <td><strong>{{ $article->title }}</strong></td>
                                        <td>
                                            @if($article->category->image)
                                                <img src="{{ asset('storage/' . $article->category->image) }}" alt="{{ $article->category->name }}" class="rounded-circle me-1" style="width: 24px; height: 24px; object-fit: cover;">
                                            @endif
                                            <span class="badge bg-light text-dark border border-primary">{{ $article->category->name }}</span>
                                        </td>
                                        <td>{{ $article->user->name }}</td>
                                        <td><i class="fas fa-eye me-1"></i> {{ $article->views }}</td>
                                        <td>{{ $article->created_at->format('M d, Y') }}</td>
                                        <td>
                                            <a href="{{ route('admin.articles.edit', $article->id) }}" class="btn btn-sm btn-info text-white"><i class="fas fa-edit"></i></a>
                                            <a href="{{ route('articles.show', $article->slug) }}" target="_blank" class="btn btn-sm btn-secondary"><i class="fas fa-external-link-alt"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
