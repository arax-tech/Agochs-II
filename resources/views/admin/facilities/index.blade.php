@extends('admin.layouts.app')
@section('title', 'Facilities')
@section('content')

<div class="content-body">
    <div class="container-fluid">
        

        <div class="row">
            
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header bg-light">
                        <h4 class="card-title">Facilities</h4>

                

                        <button class="btn btn-sm btn-primary float-right" data-bs-toggle="modal" data-bs-target="#CreateSlider">
                            <i class="fa fa-plus"></i>
                            <span>Create</span>
                        </button>

                        <!-- Create -->
                        <div class="modal fade" id="CreateSlider">
                            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header bg-light">
                                        <h5 class="modal-title">Create</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post" action="{{ url('/admin/facilitie/store') }}" enctype="multipart/form-data">
                                            @csrf
                                            
                                            <div class="row"> 
                                                
                                               


                                                <div class="col-lg-12 mb-2">
                                                    <div class="mb-3">
                                                        <label class="text-label form-label">Title <span class="text-danger">*</span></label>
                                                        <input type="text" autofocus class="form-control" name="title" required>
                                                    </div>
                                                </div>


                                                <div class="col-lg-12 mb-2">
                                                    <div class="mb-3">
                                                        <label class="text-label form-label">Description <span class="text-danger">*</span></label>
                                                        <textarea class="form-control" style="height: 100px !important" name="description" required></textarea>
                                                    </div>
                                                </div>


                                                <div class="col-lg-12 mb-2">
                                                    <div class="mb-3">
                                                        <label class="text-label form-label">Image <span class="text-danger">*</span></label>
                                                        <input type="file" class="form-control" name="image" required>
                                                    </div>
                                                </div>
                                                

                                                
                                                
                                                <div class="col-lg-12">
                                                    <div class="mb-3 mb-0">
                                                        <input type="submit" value="Create" class="submit btn btn-primary btn-block" >
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table  id="example" class="table table-striped table-responsive-md">
                                <thead class="thead-primary">
                                    <tr>
                                        <th><strong>Facilitie</strong></th>
                                        <th><strong>Description</strong></th>
                                        <th><strong>Action</strong></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($facilities as $facilitie)
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="{{ asset('/backend/facilitie/'.$facilitie->image) }}" class="img-thumbnail me-2" width="50" height="50" alt="">
                                                    <span class="w-space-no">{!! $facilitie->title !!}</span>
                                                </div>
                                            </td>
                                            <td>{{ $facilitie->description }} </td>
                                            
                                            <td>
                                                <div class="d-flex">
                                                    
                                                    <a href="javascript::" data-bs-toggle="modal" data-bs-target="#facilitie{{ $facilitie->id }}" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                                    <a href="{{ url('/admin/facilitie/delete/'.$facilitie->id) }}" onclick="return confirm('Are you sure to delete ?')" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <!-- Update -->
                                        <div class="modal fade" id="facilitie{{ $facilitie->id }}">
                                            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header bg-light">
                                                        <h5 class="modal-title">Update</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="post" action="{{ url('/admin/facilitie/update/'.$facilitie->id) }}" enctype="multipart/form-data">
                                                            @csrf
                                                            
                                                            <div class="row"> 


                                                                <div class="col-lg-12 mb-2">
                                                                    <div class="mb-3">
                                                                        <label class="text-label form-label">Title <span class="text-danger">*</span></label>
                                                                        <input type="text" autofocus class="form-control" value="{{ $facilitie->title }}" name="title" required>
                                                                    </div>
                                                                </div>

                                                                <div class="col-lg-12 mb-2">
                                                                    <div class="mb-3">
                                                                        <label class="text-label form-label">Description <span class="text-danger">*</span></label>
                                                                        <textarea class="form-control" style="height: 100px !important" name="description" required>{{ $facilitie->description }}</textarea>
                                                                    </div>
                                                                </div>


                                                                <div class="col-lg-10 mb-2">
                                                                    <div class="mb-3">
                                                                        <label class="text-label form-label">Image <span class="text-danger">*</span></label>
                                                                        <input type="file" class="form-control" name="image">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-2 mb-2">
                                                                    <div class="mb-3">
                                                                        <label class="text-label form-label">Image</label>
                                                                        <div class="d-flex align-items-center">
                                                                            <img src="{{ asset('/backend/facilitie/'.$facilitie->image) }}" class="me-2" width="40" alt="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                

                                                                
                                                                
                                                                <div class="col-lg-12">
                                                                    <div class="mb-3 mb-0">
                                                                        <input type="submit" value="Update" class="submit btn btn-primary btn-block" >
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach


                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        
       
        </div>
    </div>
</div>


@endsection