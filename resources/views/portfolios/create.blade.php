@extends('admin.layouts.app')

@section('content')
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <div>
                        @php
                            $hour = date('H'); // Get current hour in 24-hour format
                            if ($hour < 12) {
                                $greeting = 'Good Morning';
                            } elseif ($hour < 18) {
                                $greeting = 'Good Afternoon';
                            } else {
                                $greeting = 'Good Evening';
                            }
                        @endphp

                        <h4 class="fs-16 fw-semibold mb-1 mb-md-2">
                            {{ $greeting }},
                            <span class="text-primary">
                                {{ Auth::check() ? Auth::user()->name : 'John' }}
                            </span>
                        </h4>
                        <p class="text-muted mb-0">Add New Portfolio</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card shadow-sm">
                    <div class="card-header text-dark">Add New Portfolio</div>

                    <div class="card-body">
                        <form action="{{ route('portfolios.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <!-- Portfolio Title field -->
                            <div class="mb-4">
                                <label for="title" class="form-label">Title</label>
                                <input
                                    type="text"
                                    class="form-control @error('title') is-invalid @enderror"
                                    id="title"
                                    name="title"
                                    value="{{ old('title') }}"
                                    placeholder="Enter portfolio title"
                                    required>
                                @error('title')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <!-- Short Description field -->
                            <div class="mb-4">
                                <label for="short_description" class="form-label">Short Description</label>
                                <input
                                    type="text"
                                    class="form-control @error('short_description') is-invalid @enderror"
                                    id="short_description"
                                    name="short_description"
                                    value="{{ old('short_description') }}"
                                    placeholder="Enter a brief description"
                                    required>
                                @error('short_description')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Description field with CKEditor -->
                            <div class="mb-4">
                                <label for="description" class="form-label">Description</label>
                                <textarea
                                    class="form-control @error('description') is-invalid @enderror"
                                    id="description"
                                    name="description"
                                    rows="5"
                                    placeholder="Enter detailed description"
                                    required>{{ old('description') }}</textarea>
                                @error('description')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Category Dropdown -->
                            <div class="mb-4">
                                <label for="category_id" class="form-label">Category</label>
                                <select
                                    class="form-control @error('category_id') is-invalid @enderror"
                                    id="category_id"
                                    name="category_id"
                                    required>
                                    <option value="">Select Category</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                            {{ $category->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <!-- Portfolio Image field -->
                            <div class="mb-4">
                                <label for="image" class="form-label">Portfolio Image</label>
                                <input
                                    type="file"
                                    class="form-control @error('image') is-invalid @enderror" 
                                    id="image" 
                                    name="image" 
                                    required>
                                @error('image')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Portfolio Images field -->
                            <div class="mb-4">
                                <label for="images" class="form-label">Portfolio Images</label>
                                <input
                                    type="file"
                                    class="form-control @error('images.*') is-invalid @enderror" 
                                    id="images" 
                                    name="images[]" 
                                    multiple>
                                @error('images.*')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Add Portfolio</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- CKEditor Script -->
<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('description'); // Initialize CKEditor on the description field
</script>

@endsection
