@extends('front.layouts.app')
@section('content')
@section('title', 'Reset Password')
<!-- Page Content -->
<div class="container">
    <div class="row">
        <div class="col-xl-6 offset-xl-3">
            <br>
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @endif
            <div class="utf-login-register-page-aera margin-bottom-50">
                <div class="utf-welcome-text-item">
                    <h3>Reset Password</h3>
                </div>
                <form method="POST" action="{{ route('password.email') }}">
                    @csrf
                    <div class="utf-no-border">

                        <label for="email" class="col-form-label">{{ __('E-Mail Address') }}</label>
                        
                        <input id="email" type="email" class="utf-with-border @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        
                    </div>
                    
                    
                    <button class="button full-width utf-button-sliding-icon ripple-effect margin-top-10" type="submit">Send Password Reset Link <i class="icon-feather-chevron-right"></i></button>
                </form>
                
                
            </div>
        </div>
    </div>
</div>

@endsection