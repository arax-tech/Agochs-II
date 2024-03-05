@extends('admin.layouts.app')
@section('title', 'Sliders')
@section('content')

<div class="content-body">
    <div class="container-fluid">
        

        <div class="row">
            
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header bg-light">
                        <h4 class="card-title">Sliders</h4>

                

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
                                        <form method="post" action="{{ url('/admin/slider/store') }}" enctype="multipart/form-data">
                                            @csrf
                                            
                                            <div class="row"> 
                                                
                                               


                                                <div class="col-lg-6 mb-2">
                                                    <div class="mb-3">
                                                        <label class="text-label form-label">Title <span class="text-danger">*</span></label>
                                                        <input type="text" autofocus class="form-control" name="title" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 mb-2">
                                                    <div class="mb-3">
                                                        <label class="text-label form-label">allignments <span class="text-danger">*</span></label>
                                                        <select class="form-control" name="allignments" required>
                                                            <option value="left">Left</option>
                                                            <option value="center">Center</option>
                                                            <option value="right">Right</option>
                                                        </select>
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
                                        <th><strong>Slide</strong></th>
                                        <th><strong>Description</strong></th>
                                        <th><strong>Allignments</strong></th>
                                        <th><strong>Action</strong></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($sliders as $slider)
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="{{ asset('/backend/slider/'.$slider->image) }}" class="img-thumbnail me-2" width="50" height="50" alt="">
                                                    <span class="w-space-no">{!! $slider->title !!}</span>
                                                </div>
                                            </td>
                                            <td>{{ $slider->description }} </td>                                            
                                            <td>{{ $slider->allignments }} </td>                                            
                                            
                                            <td>
                                                <div class="d-flex">
                                                    
                                                    <a href="javascript::" data-bs-toggle="modal" data-bs-target="#UpdateSlider{{ $slider->id }}" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                                    <a href="{{ url('/admin/slider/delete/'.$slider->id) }}" onclick="return confirm('Are you sure to delete ?')" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <!-- Update -->
                                        <div class="modal fade" id="UpdateSlider{{ $slider->id }}">
                                            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header bg-light">
                                                        <h5 class="modal-title">Update</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="post" action="{{ url('/admin/slider/update/'.$slider->id) }}" enctype="multipart/form-data">
                                                            @csrf
                                                            
                                                            <div class="row"> 


                                                                <div class="col-lg-6 mb-2">
                                                                    <div class="mb-3">
                                                                        <label class="text-label form-label">Title <span class="text-danger">*</span></label>
                                                                        <input type="text" autofocus class="form-control" value="{{ $slider->title }}" name="title" required>
                                                                    </div>
                                                                </div>

                                                                <div class="col-lg-6 mb-2">
                                                                    <div class="mb-3">
                                                                        <label class="text-label form-label">allignments <span class="text-danger">*</span></label>
                                                                        <select class="form-control" name="allignments" required>
                                                                            <option value="left"
                                                                            @if ($slider->allignments == "left")
                                                                                selected 
                                                                            @endif
                                                                            >Left</option>
                                                                            <option value="center"
                                                                            @if ($slider->allignments == "center")
                                                                                selected 
                                                                            @endif
                                                                            >Center</option>
                                                                            <option value="right"
                                                                            @if ($slider->allignments == "right")
                                                                                selected 
                                                                            @endif
                                                                            >Right</option>
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                                <div class="col-lg-12 mb-2">
                                                                    <div class="mb-3">
                                                                        <label class="text-label form-label">Description <span class="text-danger">*</span></label>
                                                                        <textarea class="form-control" style="height: 100px !important" name="description" required>{{ $slider->description }}</textarea>
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
                                                                            <img src="{{ asset('/backend/slider/'.$slider->image) }}" class="me-2" width="40" alt="">
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