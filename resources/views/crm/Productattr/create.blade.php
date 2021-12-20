@extends('crm.layouts.crmapp')


@section('content')


<div class="row justify-content-center bg-white shadow mt-4 mx-3 pb-3">



 
    <div class="col-lg-11 ">
    <h1 class="py-2 text-center">Add Attributes</h1>
    <form method="POST" action="{{ route('product-attribute.store') }}" enctype="multipart/form-data" class="py-3">

@csrf
    <div class="row mb-3">
    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Product Attribute') }}</label>

    <div class="col-md-6">
    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="price" autofocus>
    @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    

    <div class="row my-3">
    <div class="col-md-12  text-center ">
        <button type="submit" class="btn btn-primary ">
            {{ __('Add Attriubtes') }}
        </button>
    </div>
</div>




</form>

 
  
  </div>





</div>
    </div>

@endsection
