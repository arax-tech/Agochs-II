@extends('admin.layouts.app')
@section('title', 'Create Project')
@section('content')

<div class="content-body">
    <div class="container-fluid">
        

        <div class="row">
            
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header bg-light">
                        <h4 class="card-title">Create Project</h4>

                

                        <a class="btn btn-sm btn-primary float-right" href="{{ url('/admin/project') }}">
                            <i class="fa fa-plus"></i>
                            <span>Back</span>
                        </a>
                        
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ url('/admin/project/store') }}" enctype="multipart/form-data">
                            @csrf
                            
                            <div class="row"> 
                                
                               


                                <div class="col-lg-4 mb-2">
                                    <div class="mb-3">
                                        <label class="text-label form-label">Title <span class="text-danger">*</span></label>
                                        <input type="text" autofocus class="form-control" name="title" required>
                                    </div>
                                </div>

                                <div class="col-lg-4 mb-2">
                                    <div class="mb-3">
                                        <label class="text-label form-label">Category <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="category" required>
                                    </div>
                                </div>
                                <div class="col-lg-4 mb-2">
                                    <div class="mb-3">
                                        <label class="text-label form-label">Location <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="location" required>
                                    </div>
                                </div>

                                <div class="col-lg-12 mb-2">
                                    <div class="mb-3">
                                        <label class="text-label form-label">Description <span class="text-danger">*</span></label>
                                        <textarea class="form-control" style="height: 100px !important" name="description" id="description1" required></textarea>
                                    </div>
                                </div>

                                {{-- <div class="col-lg-4 mb-2">
                                    <div class="mb-3">
                                        <label class="text-label form-label">Date <span class="text-danger">*</span></label>
                                        <input type="date" class="form-control" name="date" required>
                                    </div>
                                </div> --}}
                                <div class="col-lg-12 mb-2">
                                    <div class="mb-3">
                                        <label class="text-label form-label">Images <span class="text-danger">*</span></label>
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
</div>


@endsection