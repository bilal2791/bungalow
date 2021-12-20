@extends('crm.layouts.crmapp')


@section('content')


<div class="row justify-content-center bg-white shadow mt-4 mx-3 pb-3">

<div class="col-md-4 py-3">
<select class="form-control" id="product-selection">

  
<option value="0">Select Product Type</option>
<option value="1">Simple Product</option>
<option value="2">Add Product Varaitions</option>


</select>
</div>


    <div class="col-lg-11 ">



  






  <form id="simple-product" method="POST" action="{{ route('product.store') }}" enctype="multipart/form-data" class="py-3">

@csrf

<div class="row mb-3">
    <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

    <div class="col-md-6">
        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>


<div class="row mb-3">
    <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Slug') }}</label>

    <div class="col-md-6">
        <input id="slug" type="text" class="form-control @error('slug') is-invalid @enderror" name="slug" value="{{ old('slug') }}" required autocomplete="slug" autofocus>

        @error('slug')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>




<div class="row mb-3">
    <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>

    <div class="col-md-6">
        <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autocomplete="title" autofocus>

        @error('title')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>


<div class="row mb-3">
    <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Select Category') }}</label>


    <div class="col-md-6">
    <h6>Select Product Type</h6>
    <select class="category form-control" name="category_id">
        <option>Select Category</option>
        @foreach($category as  $cat)
        <option value="{{$cat->id}}">{{$cat->name}}</option>

        @endforeach
    </select>

        @error('category_id')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>


<div class="row mb-3">
    <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Select Category') }}</label>

    <div class="col-md-6">

    <select class="category form-control" name="subcategory_id">
        <option>Select SubCategory</option>
        @foreach($subcategory as  $cat)
        <option value="{{$cat->id}}">{{$cat->name}}</option>

        @endforeach
    </select>
        @error('category_id')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>


<div class="row mb-3">
    <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Image') }}</label>

    <div class="col-md-6">
        <input type="file" name="productImage" id="productImage">
    </div>
</div>



<div class="row mb-3">
    <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('Price') }}</label>

    <div class="col-md-6">
       <input id="price" type="text" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}" required autocomplete="price" autofocus>

        @error('price')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>


<div class="row mb-3">
    <label for="Description" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

    <div class="col-md-6">
       <textarea class="form-control @error('description') is-invalid @enderror" name="description">{{ old('description') }}</textarea>
        @error('description')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>







<div class="row mb-0">
    <div class="col-md-6 offset-md-4">
        <button type="submit" class="btn btn-primary">
            {{ __('Create') }}
        </button>
    </div>
</div>



</form>
  

<div class="row mb-3" id="productvart" style="display:none">
    <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Select Attribute') }}</label>

    <div class="col-md-6">

    <select class="category form-control" name="category_id">
        <option>Select Attributes</option>
        @foreach($ProductAttribute as  $ProductAttribute)
        <option value="{{$ProductAttribute->id}}">{{$ProductAttribute->name}}</option>

        @endforeach
    </select>
        @error('ProductAttribute')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>


  </div>





</div>
    </div>

@endsection


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
  $(document).ready(function (e) {

$('#product-selection').on('change', function() {


    if(("#product-selection").val() == 0){
        $("#simple-product").show();
        $("#productvart").hide();
    }

else if(("#product-selection").val() == 1){

    $("#simple-product").show();
}
else if(("#product-selection").val() == 2)
$("#productvart").hide();

 });

  });
</script>