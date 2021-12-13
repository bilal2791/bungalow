@extends('layouts.appnew')

@section('content')


<div class="container-fluid m-0">
  <div class="vanites-login-wrapper">
    <div class="row">  
 
      <div class="col-lg-6 ">
        <div class="vanites-login-logo-wrapper">
          <img src="https://kahoodesigns.com/bungalow/crm/assets/images/logo.png">
        </div>
      </div>
      <div class="col-lg-6">
    
        <div class="vanites-login-form-wrapper">
        <h1 class="text-white">Register Your Self</h1>
        <div class="custom-register-wrapper">
       
 <form method="POST" action="{{ route('register') }}" class="cutsom_register">
     @csrf

     <div class="row mb-3">
        
         <div class="col-md-12">
             <input id="name" type="text" placeholder="Enter name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

             @error('name')
                 <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                 </span>
             @enderror
         </div>
     </div>

     <div class="row mb-3">
        
         <div class="col-md-12">
             <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

             @error('email')
                 <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                 </span>
             @enderror
         </div>
     </div>





     
     <div class="row mb-3">
       
         <div class="col-md-12">
             <input id="country" type="text"  placeholder="country" class="form-control @error('country') is-invalid @enderror" name="country" required autocomplete="new-number">

             @error('country')
                 <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                 </span>
             @enderror
         </div>
     </div>


     <div class="row mb-3">
        
         <div class="col-md-12">
             <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

             @error('password')
                 <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                 </span>
      @enderror
         </div>
     </div>

     <div class="row mb-3">
        
         <div class="col-md-12">
             <input id="password-confirm" type="password" placeholder="Confirm Password" class="form-control" name="password_confirmation" required autocomplete="new-password">
         </div>
     </div>

     <div class="row mb-0">
         <div class="col-md-6 ">
             <button type="submit" class="btn btn-primary">
                 {{ __('Register') }}
             </button>
             <a href="{{route('login')}}" class="text-decoration-none text-white">Login</a>
         </div>
     </div>
 </form>
</div>
          <div class="all_write_reserved">Copyright copyright 2021. All Rights Reserved.</div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
