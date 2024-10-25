@extends('admin.layouts.app')

@section('content')
<div class="page-content">
    <div class="container-fluid">
        <!-- Page Title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Team List</h4>
                </div>
            </div>
        </div>
        <!-- End Page Title -->

        <!-- Team Table -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Teams</h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover table-bordered table-striped dt-responsive nowrap">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($teams as $team)
                                <tr>
                                    <td>
                                    
                                      
                                        <img src="{{ asset('images/' . $team->image) }}" alt="Team Image" width="80">
                                   
                                                        
                                    </td>
                                    <td>{{ $team->name }}</td>
                                    <td>{!! $team->description !!}</td>
                                    <td>
                                        <!-- Edit Button -->
                                        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editModal{{ $team->id }}">
                                            Edit
                                        </button>
                                        
                                        <!-- Delete Button -->
                                        <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $team->id }}">
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
        <!-- End Team Table -->
    </div>
</div>

<!-- Modals for Editing and Deleting Teams -->
@foreach($teams as $team)
<!-- Edit Modal -->
<div class="modal fade" id="editModal{{ $team->id }}" tabindex="-1" aria-labelledby="editModalLabel{{ $team->id }}" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel{{ $team->id }}">Edit Team</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('teams.update', $team->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
            
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="editTeamName{{ $team->id }}" class="form-label">Team Name</label>
                        <input type="text" class="form-control" id="editTeamName{{ $team->id }}" name="name" value="{{ old('name', $team->name) }}" required>
                    </div>
            
                    <div class="mb-3">
                        <label for="editDescription{{ $team->id }}" class="form-label">Description</label>
                        <textarea class="form-control" id="editDescription{{ $team->id }}" name="description" required>{{ old('description', $team->description) }}</textarea>
                    </div>
            
                    <div class="mb-3">
                        <label for="editImage{{ $team->id }}" class="form-label">Image</label>
                        <input type="file" class="form-control" id="editImage{{ $team->id }}" name="image">
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
<div class="modal fade" id="deleteModal{{ $team->id }}" tabindex="-1" aria-labelledby="deleteModalLabel{{ $team->id }}" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel{{ $team->id }}">Confirm Deletion</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('teams.destroy', $team->id) }}" method="POST">
                @csrf
                @method('DELETE')

                <div class="modal-body">
                    <p>Are you sure you want to delete this team?</p>
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
