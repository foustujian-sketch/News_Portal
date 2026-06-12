@extends('layouts.admin')

@section('title', 'Manage Articles - Beautique Admin')

@section('content')
    <div class="row">
        <div class="col-md-12 mb-4">
            <div class="d-flex justify-content-between align-items-center">
                <h2 class="fw-bold">Manage Articles</h2>
                <a href="{{ route('admin.articles.create') }}" class="btn btn-primary"><i class="fas fa-plus me-2"></i> Create New Article</a>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header bg-white py-3">
            <form action="{{ route('admin.articles.index') }}" method="GET" class="row g-3">
                <div class="col-md-4">
                    <div class="input-group">
                        <input type="text" name="search" class="form-control" placeholder="Search by title..." value="{{ request('search') }}">
                        <button class="btn btn-outline-primary" type="submit">Search</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead>
                        <tr>
                            <th>Thumbnail</th>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Author</th>
                            <th>Views</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($articles as $article)
                            <tr>
                                <td>
                                    @if($article->thumbnail)
                                        <img src="{{ asset('storage/' . $article->thumbnail) }}" alt="{{ $article->title }}" class="rounded" style="width: 60px; height: 40px; object-fit: cover;">
                                    @else
                                        <div class="bg-light rounded d-flex align-items-center justify-content-center" style="width: 60px; height: 40px;">
                                            <i class="fas fa-image text-muted"></i>
                                        </div>
                                    @endif
                                </td>
                                <td><strong>{{ $article->title }}</strong></td>
                                <td>{{ $article->category->name }}</td>
                                <td>{{ $article->user->name }}</td>
                                <td>{{ $article->views }}</td>
                                <td>{{ $article->created_at->format('M d, Y') }}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ route('admin.articles.edit', $article->id) }}" class="btn btn-sm btn-info text-white"><i class="fas fa-edit"></i></a>
                                        <form action="{{ route('admin.articles.destroy', $article->id) }}" method="POST" onsubmit="confirmDelete(event, 'Delete Article', 'Are you sure you want to delete this article? This action cannot be undone.')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                                        </form>
                                        <a href="{{ route('articles.show', $article->slug) }}" target="_blank" class="btn btn-sm btn-secondary"><i class="fas fa-external-link-alt"></i></a>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center py-4">No articles found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="mt-4 d-flex justify-content-center">
                {{ $articles->links() }}
            </div>
        </div>
    </div>
@endsection
