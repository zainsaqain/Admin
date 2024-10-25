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
                        <p class="text-muted mb-0">Add New Team</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card shadow-sm">
                    <div class="card-header text-dark">Add Team</div>

                    <div class="card-body">
                        <form action="{{ route('teams.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <!-- Service Name field -->
                            <div class="mb-4">
                                <label for="name" class="form-label"> Name</label>
                                <input
                                    type="text"
                                    class="form-control @error('name') is-invalid @enderror"
                                    id="name"
                                    name="name"
                                    value="{{ old('name') }}"
                                    placeholder="Enter service name"
                                    required>
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="mb-4">
                                <label for="description" class="form-label">Description</label>
                                <textarea
                                    class="form-control @error('description') is-invalid @enderror"
                                    id="description"
                                    name="description"
                                    rows="5"
                                    placeholder="Enter service description"
                                    required>{{ old('description') }}</textarea>
                                @error('description')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="mb-4">
                                <label for="image" class="form-label"> Image</label>
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
                            
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Add Team</button>
                            </div>
                            

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection