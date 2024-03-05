@extends('admin.layouts.app')
@section('title', 'Dashboard')
@section('content')

<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card tryal-gradient">
                                    <div class="card-body tryal row">
                                        <div class="col-xl-7 col-sm-6">
                                            <h2>Welcome to Agochs-II...</h2>
                                            <span>
                                                Agochs-II is a landmark project of Irshad Associates Private Limited, a AGOCHS-II AGOCHS-II has come a long way to symbolize commitment, distinction and professional...
                                            </span>
                                            
                                        </div>
                                        <div class="col-xl-5 col-sm-6">
                                            <img src="{{ asset('backend/images/chart.png') }}" alt="" class="sd-shape">
                                        </div>
                                    </div>
                                </div>
                            </div>
                       

                        </div>
                        
                    </div>
                    <div class="col-xl-6">
                        <div class="row">
                            <div class="col-xl-6 col-sm-6">
                                <a href="#">
                                    <div class="card">
                                        <div class="card-body px-4 pb-0">
                                            <h4 class="fs-18 font-w600 mb-5 text-nowrap">
                                                Users
                                                <i class="fas fa-users d-icon"></i>
                                            </h4>

                                            <div class="progress default-progress">
                                                <div class="progress-bar bg-gradient1 progress-animated" style="width: 100%; height:10px;" role="progressbar"></div>
                                            </div>
                                            <div class="d-flex align-items-end mt-2 pb-3 justify-content-between">
                                                <span>View <i class="fa fa-chevron-right"></i> </span>
                                                <h4 class="mb-0">{{ DB::table('users')->where('role', 'Admin')->count() }}</h4>
                                            </div>
                                        
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xl-6 col-sm-6">
                                <a href="{{ url('/admin/sliders') }}">
                                    <div class="card">
                                        <div class="card-body px-4 pb-0">
                                            <h4 class="fs-18 font-w600 mb-5 text-nowrap">
                                                Sliders
                                                <i class="fas fa-crown d-icon"></i>
                                            </h4>

                                            <div class="progress default-progress">
                                                <div class="progress-bar bg-gradient1 progress-animated" style="width: 100%; height:10px;" role="progressbar"></div>
                                            </div>
                                            <div class="d-flex align-items-end mt-2 pb-3 justify-content-between">
                                                <span>View <i class="fa fa-chevron-right"></i> </span>
                                                <h4 class="mb-0">{{ DB::table('sliders')->count() }}</h4>
                                            </div>
                                        
                                        </div>
                                    </div>
                                </a>
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="col-xl-6 col-sm-6">
                                <a href="{{ url('/admin/projects') }}">
                                    <div class="card">
                                        <div class="card-body px-4 pb-0">
                                            <h4 class="fs-18 font-w600 mb-5 text-nowrap">
                                                Projects
                                                <i class="fas fa-bullhorn d-icon"></i>
                                            </h4>

                                            <div class="progress default-progress">
                                                <div class="progress-bar bg-gradient1 progress-animated" style="width: 100%; height:10px;" role="progressbar"></div>
                                            </div>
                                            <div class="d-flex align-items-end mt-2 pb-3 justify-content-between">
                                                <span>View <i class="fa fa-chevron-right"></i> </span>
                                                <h4 class="mb-0">{{ DB::table('projects')->count() }}</h4>
                                            </div>
                                        
                                        </div>
                                    </div>
                                </a>
                            </div>
                            
                            <div class="col-xl-6 col-sm-6">
                                <a href="{{ url('/admin/masterplan') }}">
                                    <div class="card">
                                        <div class="card-body px-4 pb-0">
                                            <h4 class="fs-18 font-w600 mb-5 text-nowrap">
                                                Master Plan
                                                <i class="fas fa-paper-plane d-icon"></i>
                                            </h4>

                                            <div class="progress default-progress">
                                                <div class="progress-bar bg-gradient1 progress-animated" style="width: 100%; height:10px;" role="progressbar"></div>
                                            </div>
                                            <div class="d-flex align-items-end mt-2 pb-3 justify-content-between">
                                                <span>View <i class="fa fa-chevron-right"></i> </span>
                                                <h4 class="mb-0">{{ DB::table('master_plans')->count() }}</h4>
                                            </div>
                                        
                                        </div>
                                    </div>
                                </a>
                            </div>
                            
                        </div>
                        

                    </div>

                
                </div>
                <div class="row">
                    <div class="col-xl-4 col-sm-6">
                        <a href="{{ url('/admin/facilities') }}">
                            <div class="card">
                                <div class="card-body px-4 pb-0">
                                    <h4 class="fs-18 font-w600 mb-5 text-nowrap">
                                        Facilities
                                        <i class="fas fa-building d-icon"></i>
                                    </h4>

                                    <div class="progress default-progress">
                                        <div class="progress-bar bg-gradient1 progress-animated" style="width: 100%; height:10px;" role="progressbar"></div>
                                    </div>
                                    <div class="d-flex align-items-end mt-2 pb-3 justify-content-between">
                                        <span>View <i class="fa fa-chevron-right"></i> </span>
                                        <h4 class="mb-0">{{ DB::table('facilities')->count() }}</h4>
                                    </div>
                                
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-xl-4 col-sm-6">
                        <a href="{{ url('/admin/media') }}">
                            <div class="card">
                                <div class="card-body px-4 pb-0">
                                    <h4 class="fs-18 font-w600 mb-5 text-nowrap">
                                        Medias
                                        <i class="fas fa-video d-icon"></i>
                                    </h4>

                                    <div class="progress default-progress">
                                        <div class="progress-bar bg-gradient1 progress-animated" style="width: 100%; height:10px;" role="progressbar"></div>
                                    </div>
                                    <div class="d-flex align-items-end mt-2 pb-3 justify-content-between">
                                        <span>View <i class="fa fa-chevron-right"></i> </span>
                                        <h4 class="mb-0">{{ DB::table('media')->count() }}</h4>
                                    </div>
                                
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-xl-4 col-sm-6">
                        <a href="{{ url('/admin/blogs') }}">
                            <div class="card">
                                <div class="card-body px-4 pb-0">
                                    <h4 class="fs-18 font-w600 mb-5 text-nowrap">
                                        Blogs
                                        <i class="fas fa-flag d-icon"></i>
                                    </h4>

                                    <div class="progress default-progress">
                                        <div class="progress-bar bg-gradient1 progress-animated" style="width: 100%; height:10px;" role="progressbar"></div>
                                    </div>
                                    <div class="d-flex align-items-end mt-2 pb-3 justify-content-between">
                                        <span>View <i class="fa fa-chevron-right"></i> </span>
                                        <h4 class="mb-0">{{ DB::table('blogs')->count() }}</h4>
                                    </div>
                                
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')



@endsection
