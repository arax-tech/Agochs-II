@extends('admin.layouts.app')
@section('title', 'Projects')
@section('content')

<div class="content-body">
    <div class="container-fluid">
        

        <div class="row">
            
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header bg-light">
                        <h4 class="card-title">Projects</h4>

                

                        <a class="btn btn-sm btn-primary float-right" href="{{ url('/admin/project/create') }}">
                            <i class="fa fa-plus"></i>
                            <span>Create</span>
                        </a>

                        <!-- Create -->
                        <div class="modal fade" id="CreateSlider">
                            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header bg-light">
                                        <h5 class="modal-title">Create</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                    </div>
                                    <div class="modal-body">
                                        
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
                                        <th><strong>Project</strong></th>
                                        <th><strong>Category</strong></th>
                                        {{-- <th><strong>Date</strong></th> --}}
                                        <th><strong>Description</strong></th>
                                        <th><strong>Action</strong></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($projects as $project)
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="{{ asset('/backend/project/'.$project->images) }}" class="img-thumbnail me-2" width="50" height="50" alt="">
                                                    <span class="w-space-no">{!! $project->title !!}</span>
                                                </div>
                                            </td>
                                            <td>{{ $project->category }} </td>                                            
                                            <td>{!! mb_strimwidth($project->description, 0, 50, "...") !!} </td>                                            
                                            
                                            <td>
                                                <div class="d-flex">
                                                    
                                                    <a href="{{ url('/admin/project/edit/'.$project->id) }}" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                                    <a target="_blank" href="{{ url('/project/'.$project->title) }}" class="btn btn-info shadow btn-xs sharp me-1"><i class="fa fa-eye"></i></a>
                                                    <a href="{{ url('/admin/project/delete/'.$project->id) }}" onclick="return confirm('Are you sure to delete ?')" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                                </div>
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
</div>


@endsection