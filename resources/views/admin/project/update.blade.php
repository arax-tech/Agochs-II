@extends('admin.layouts.app')
@section('title', 'Update Project')
@section('content')

<div class="content-body">
    <div class="container-fluid">
        

        <div class="row">
            
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header bg-light">
                        <h4 class="card-title">Update Project</h4>

                

                        <a class="btn btn-sm btn-primary float-right" href="{{ url('/admin/project') }}">
                            <i class="fa fa-plus"></i>
                            <span>Back</span>
                        </a>
                        
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ url('/admin/project/update/'.$project->id) }}" enctype="multipart/form-data">
                            @csrf
                            
                            <div class="row"> 
                                
                               


                                <div class="col-lg-4 mb-2">
                                    <div class="mb-3">
                                        <label class="text-label form-label">Title <span class="text-danger">*</span></label>
                                        <input type="text" autofocus class="form-control" name="title" value="{{ $project->title }}" required>
                                    </div>
                                </div>

                                <div class="col-lg-4 mb-2">
                                    <div class="mb-3">
                                        <label class="text-label form-label">Category <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="category" value="{{ $project->category }}" required>
                                    </div>
                                </div>
                                <div class="col-lg-4 mb-2">
                                    <div class="mb-3">
                                        <label class="text-label form-label">Location <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="location" value="{{ $project->location }}" required>
                                    </div>
                                </div>

                                <div class="col-lg-12 mb-2">
                                    <div class="mb-3">
                                        <label class="text-label form-label">Description <span class="text-danger">*</span></label>
                                        <textarea class="form-control" style="height: 100px !important" name="description" required>{!! $project->description !!}</textarea>
                                    </div>
                                </div>

                                
                                <div class="col-lg-12 mb-2">
                                    <div class="mb-3">
                                        <label class="text-label form-label">Images</label>
                                        <input type="file" class="form-control" name="image" >
                                    </div>
                                </div>
                                <div class="col-lg-12 mb-2">
                                    <div class="mb-3">
                                        <img style="width: 50px; height: 50px" class="img-thumbnail" src="{{ asset('/backend/project/'.$project->images) }}">
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
    </div>
</div>


@endsection