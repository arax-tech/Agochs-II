@extends('layouts.app')

@section('title', 'Login')
@section('content')

<div class="ltn__service-area section-bg-1 pt-20 pb-20">
        <div class="container">
            <div class="row  justify-content-center">
                <div class="col-lg-6 col-sm-6 col-12">
                    <div class="ltn__feature-item ltn__feature-item-6 bg-white box-shadow-1">
                        <div class="ltn__feature-icon text-center">
                            <span><i class="flaticon-user"></i></span>
                            <!-- <img src="img/icons/icon-img/21.png" alt="#"> -->
                        </div>
                        <div class="ltn__feature-info">
                            
                            <h4 class="text-center mb-4">Sign in your account</h4>
                            <form action="{{ url('/login') }}" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label class="mb-1"><strong>Email</strong></label>
                                    <input type="email" name="email" autofocus="" placeholder="example@info.com" class="form-control" value="{{ old('email') }}" required>
                                </div>
                                <div class="mb-3">
                                    <label class="mb-1"><strong>Password</strong></label>
                                    <input type="password" name="password" class="form-control" value="{{ old('password') }}" placeholder="****" required>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            
            </div>
        </div>
    </div>




@endsection