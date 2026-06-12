@extends('layouts.admin')

@section('title', 'Edit Article - Beautique Admin')

@section('content')
    <div class="row">
        <div class="col-md-12 mb-4">
            <h2 class="fw-bold">Edit Article</h2>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.articles.update', $article->id) }}" method="POST" enctype="multipart/form-data" onsubmit="confirmAction(event, 'Update Article', 'Are you sure you want to update this article?', 'Update')">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-8">
                        <div class="mb-3">
                            <label class="form-label">Title</label>
                            <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title', $article->title) }}" required>
                            @error('title')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Content</label>
                            <textarea name="content" class="form-control @error('content') is-invalid @enderror" rows="15" required>{{ old('content', $article->content) }}</textarea>
                            @error('content')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="form-label">Category</label>
                            <select name="category_id" class="form-select @error('category_id') is-invalid @enderror" required>
                                <option value="">Select Category</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}" {{ old('category_id', $article->category_id) == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Thumbnail</label>
                            @if($article->thumbnail)
                                <div class="mb-2">
                                    <img src="{{ asset('storage/' . $article->thumbnail) }}" alt="Current Thumbnail" class="img-thumbnail" style="max-height: 150px;">
                                </div>
                            @endif
                            <input type="file" name="thumbnail" class="form-control @error('thumbnail') is-invalid @enderror">
                            <div class="form-text">Leave blank to keep current thumbnail.</div>
                            @error('thumbnail')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="d-grid gap-2 mt-4">
                            <button type="submit" class="btn btn-primary btn-lg">Update Article</button>
                            <a href="{{ route('admin.articles.index') }}" class="btn btn-outline-secondary">Cancel</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
