@extends('admin.layouts.app')

@section('content')
<div class="page-content">
    <div class="container-fluid">
        <!-- Page Title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Service List</h4>
                </div>
            </div>
        </div>
        <!-- End Page Title -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Services</h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover table-bordered table-striped dt-responsive nowrap">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($services as $service)
                                <tr>
                                    <td>
                                        
                                        <img src="{{ asset($service->image) }}" alt="Service Image" style="width: 70px; height: 70px;">
                                    
                                    
                                    </td>
                                    
                                    
                                    <td>{{ $service->name }}</td>
                                    <td>{!! $service->description !!}</td>
                                    <td>
                                        <!-- Edit Button -->
                                        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editModal{{ $service->id }}" type="submit">
                                            Edit
                                        </button>
                                        
                                        <!-- Delete Button -->
                                        <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $service->id }}">
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
              @foreach($services as $service)
              
<div class="modal fade" id="editModal{{ $service->id }}" tabindex="-1" aria-labelledby="editModalLabel{{ $service->id }}" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel{{ $service->id }}">Edit Service</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('services.update', $service->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
            
                <div class="modal-body">
    
                    <div class="mb-3">
                        <label for="editServiceName{{ $service->id }}" class="form-label">Service Name</label>
                        <input type="text" class="form-control" id="editServiceName{{ $service->id }}" name="name" value="{{ old('name', $service->name) }}" required>
                    </div>
            
                    <div class="mb-3">
                        <label for="editDescription{{ $service->id }}" class="form-label">Description</label>
                        <textarea class="form-control" id="editDescription{{ $service->id }}" name="description" required>{{ old('description', $service->description) }}</textarea>
                    </div>
            
                    <div class="mb-3">
                        <label for="editimage{{ $service->id }}" class="form-label">Image</label>
                        <input type="file" class="form-control" id="editimage{{ $service->id }}" name="image">
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
<div class="modal fade" id="deleteModal{{ $service->id }}" tabindex="-1" aria-labelledby="deleteModalLabel{{ $service->id }}" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel{{ $service->id }}">Confirm Deletion</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
             <form action="{{ route('services.destroy', $service->id) }}" method="POST"> 
                @csrf
                @method('DELETE')

                <div class="modal-body">
                    <p>Are you sure you want to delete this service?</p>
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