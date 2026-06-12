@extends('layouts.admin')

@section('title', 'Manage Categories - Beautique Admin')

@section('content')
    <div class="row">
        <div class="col-md-12 mb-4">
            <div class="d-flex justify-content-between align-items-center">
                <h2 class="fw-bold">Manage Categories</h2>
                <a href="{{ route('admin.categories.create') }}" class="btn btn-primary"><i class="fas fa-plus me-2"></i> Create New Category</a>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Slug</th>
                            <th>Description</th>
                            <th>Articles Count</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($categories as $category)
                            <tr>
                                <td>
                                    @if($category->image)
                                        <img src="{{ asset('storage/' . $category->image) }}" alt="{{ $category->name }}" class="rounded" style="width: 50px; height: 50px; object-fit: cover;">
                                    @else
                                        <div class="bg-light rounded d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                            <i class="fas fa-image text-muted"></i>
                                        </div>
                                    @endif
                                </td>
                                <td><strong>{{ $category->name }}</strong></td>
                                <td><code>{{ $category->slug }}</code></td>
                                <td>{{ Str::limit($category->description, 50) }}</td>
                                <td><span class="badge bg-light text-dark border border-primary">{{ $category->articles()->count() }}</span></td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ route('admin.categories.edit', $category->id) }}" class="btn btn-sm btn-info text-white"><i class="fas fa-edit"></i></a>
                                        <form action="{{ route('admin.categories.destroy', $category->id) }}" method="POST" onsubmit="confirmDelete(event, 'Delete Category', 'Are you sure you want to delete this category? This action cannot be undone.')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center py-4">No categories found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="mt-4 d-flex justify-content-center">
                {{ $categories->links() }}
            </div>
        </div>
    </div>
@endsection
