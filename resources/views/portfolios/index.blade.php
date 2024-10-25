@extends('admin.layouts.app')

@section('content')
<div class="page-content">
    <div class="container-fluid">
        <!-- Page Title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Portfolio List</h4>
                </div>
            </div>
        </div>
        <!-- End Page Title -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Portfolios</h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover table-bordered table-striped dt-responsive nowrap">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Short Description</th>
                                    <th>Description</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($portfolios as $portfolio)
                                <tr>
                                    <td>
                                        
                                        <img src="{{ asset($portfolio->image) }}" alt="Portfolio Image" width="80">                                       
                                    </td>
                                    
                                  
                                    <td>{{ $portfolio->title }}</td>
                                    <td>{{ $portfolio->short_description }}</td>
                                    <td>{!! $portfolio->description !!}</td>
                                    <td>
                                        <!-- Edit Button -->
                                        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editModal{{ $portfolio->id }}" type="submit">
                                            Edit
                                        </button>
                                        
                                        <!-- Delete Button -->
                                        <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $portfolio->id }}">
                                            Delete
                                        </button>
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
</div>

@foreach($portfolios as $portfolio)
<!-- Edit Modal -->
<div class="modal fade" id="editModal{{ $portfolio->id }}" tabindex="-1" aria-labelledby="editModalLabel{{ $portfolio->id }}" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel{{ $portfolio->id }}">Edit Portfolio</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('portfolios.update', $portfolio->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="modal-body">
                    <div class="mb-3">
                        <label for="editTitle{{ $portfolio->id }}" class="form-label">Title</label>
                        <input type="text" class="form-control" id="editTitle{{ $portfolio->id }}" name="title" value="{{ old('title', $portfolio->title) }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="editShortDescription{{ $portfolio->id }}" class="form-label">Short Description</label>
                        <textarea class="form-control" id="editShortDescription{{ $portfolio->id }}" name="short_description" required>{{ old('short_description', $portfolio->short_description) }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="editDescription{{ $portfolio->id }}" class="form-label">Description</label>
                        <textarea class="form-control" id="editDescription{{ $portfolio->id }}" name="description" required>{{ old('description', $portfolio->description) }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="editImage{{ $portfolio->id }}" class="form-label">Image</label>
                        <input type="file" class="form-control" id="editImage{{ $portfolio->id }}" name="image">
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Delete Modal -->
<div class="modal fade" id="deleteModal{{ $portfolio->id }}" tabindex="-1" aria-labelledby="deleteModalLabel{{ $portfolio->id }}" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel{{ $portfolio->id }}">Confirm Deletion</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('portfolios.destroy', $portfolio->id) }}" method="POST">
                @csrf
                @method('DELETE')

                <div class="modal-body">
                    <p>Are you sure you want to delete this portfolio?</p>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach
@endsection
