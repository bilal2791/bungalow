@extends('layouts.appnew')

@section('content')


<div class="container-fluid p-0 m-0">
  <div class="vanites-login-wrapper">
    <div class="row">  
      <div class="col-lg-6 p-0">
        <div class="vanites-login-logo-wrapper">
          <img src="https://kahoodesigns.com/bungalow/crm/assets/images/logo.png">
        </div>
      </div>
      <div class="col-lg-6 p-0">
        <div class="vanites-login-form-wrapper">
        <form method="POST" action="{{ route('login') }}">
                        @csrf
            <div class="vanites-form-inner-wrapper">
                            <div class="form-group mb-3">
                <div class="col-auto">
                  <label class="sr-only" for="inlineFormInputGroup">Email</label>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <div class="input-group-text"><i class="far fa-envelope login-form-icon"></i></div>
                    </div>
         
                      <input id="email" placeholder="Enter the Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email" autofocus>
                   
                   
                    <span class="invalid-feedback"></span>
                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                
                  </div>
                </div>
              </div>
              <div class="form-group mb-3">
                <div class="col-auto">
                  <label class="sr-only" for="inlineFormInputGroupPassword">Password</label>
                  <div class="input-group mb-2">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="far fa-key login-form-icon"></i>
                      </div>
                    </div>

                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="current-password" placeholder="Enter Password">

                   
                    <span class="invalid-feedback"></span>
                    
                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                  </div>
                </div>
              </div>

              <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label text-white" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>


              <div class="vanites-login-btn">
                   <button type="submit" name="login" class="btn btn-for-login d-inline-block w-100">
                                    {{ __('Login') }}
                                </button>

             
                </div>

                @if (Route::has('password.request'))
                <p class="text-center text-white mt-2 mb-2">
   
   <a class="text-white font-weight-bold" href="{{ route('password.request') }}">
                           {{ __('Forgot Your Password?') }}
                       </a>

</p>
                                @endif


                                <p class="text-white">Not an Account <a href="{{__('register') }}">Register</a></p>

          
            </div>
          </form>
          <div class="all_write_reserved">Copyright copyright 2021. All Rights Reserved.</div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
