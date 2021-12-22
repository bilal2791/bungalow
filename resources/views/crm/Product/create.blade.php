@extends('crm.layouts.crmapp')


@section('content')


<div class="row justify-content-center bg-white shadow mt-4 mx-3 pb-3">

<div class="col-md-4 py-3">
<select class="form-control" id="productselection">


<option value="0">Select Product Type</option>
<option value="1">Simple Product</option>
<option value="2">Add Product Varaitions</option>


</select>
</div>


    <div class="col-lg-11 ">










  <form id="simpleproduct" method="POST" action="{{ route('product.store') }}" enctype="multipart/form-data" class="py-3">

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

    <select class="category form-control" name="category_id" id="select_varients">
        <option value="0">Select Attributes</option>
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

    <div class="col-md-2">
        <button class="btn btn-primary" id="addattributes" style="display:none;">Add Variations</button>
    </div>

<!-- Group  -->



</div>


<!-- end  -->


</div>

<!-- append row  -->
<div class="row justify-content-center pb-3" id="new_attribute" style="display:none;">

</div>

<!-- end of append roew  -->


<!-- append attributes  -->

<div class="row justify-content-center pb-3" id="add_attrz">

</div>


  </div>







</div>
    </div>

@endsection


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
  $(document).ready(function () {


    $("#productselection").change(function(){


        if ($("#productselection").val() == 0)
      {
   
        $("#simpleproduct").show();
        $("#productvart").hide();
        $("#new_attribute").hide();
        

      }
      else if($("#productselection").val() == 1)
      {

        $("#simpleproduct").show();
        $("#productvart").hide();
        $("#new_attribute").hide();
      }

      else if($("#productselection").val() == 2)
      {
      
        $("#simpleproduct").show();
        $("#productvart").show();
        $("#new_attribute").show();
      }

    });

    // $("#addattributes").click(function(){
    //     alert("Hello");
    // })



    var counterTwo = 0;
$("#addattributes").click(function () {
    var html = '';
 

    html += '<div class="col-md-11">';
    html += '<div class="row">';
    html += '<h2 class="text-center py-3">Add Variations</h2>';
    html += '<label for="Value" class="col-md-4 col-form-label text-md-right my-3">';
    html += '{{ __(" Value") }}';
    html += '</label>';

    html += '<div class="col-md-6">';
    html += '<input id="varient" type="text" class="form-control my-3" name="value" placeholder="Enter The Product Varient" required autocomplete="price" autofocus>';

    html += '</div>';

    html += '<label for="price" class="col-md-4 col-form-label text-md-right my-3">';
    html += '{{ __(" Price") }}';
    html += '</label>';

    html += '<div class="col-md-6">';
    html += '<input id="varient" type="text" class="form-control my-3" name="price" placeholder="Enter The Product Varient" required autocomplete="price" autofocus>';

    html += '</div>';


    html += '<label for="stock" class="col-md-4 col-form-label text-md-right my-3">';
    html += '{{ __("Stock ") }}';
    html += '</label>';

    html += '<div class="col-md-6">';
    html += '<input id="varient" type="text" class="form-control my-3" name="stock" placeholder="Enter The Product Varient" required autocomplete="price" autofocus>';

    html += '</div>';


    html += '<label for="title" class="col-md-4 col-form-label text-md-right my-3">';
    html += '{{ __("Sku") }}';
    html += '</label>';

    html += '<div class="col-md-6">';
    html += '<input id="varient" type="text" class="form-control my-3" name="Sku" placeholder="Enter The Product Varient" required autocomplete="price" autofocus>';

    html += '</div>';

    html += '<label for="title" class="col-md-4 col-form-label text-md-right my-3">';
    html += '{{ __("Image") }}';
    html += '</label>';

    html += '<div class="col-md-6">';
    html += '<input id="varient" type="file" class="form-control my-3" name="sku" placeholder="Enter The Product Varient" required autocomplete="price" autofocus>';

    html += '</div>';


    html += '<div class="col-md-12 d-flex justify-content-center" id="btn-dd">';
    html += '<button class="btn btn-primary add_attrs"  style="margin-right:10px">Add More Attributes</button>';
    html += '<button class="btn btn-success">Submit</button>';
    html += '</div>';

 








    html += '</div>';

    counterTwo++;

    $('#new_attribute').append(html);
    $("#addattributes").hide();
});



   

//select varients
$("#select_varients").change(function(){
    if($("#select_varients").val() == 0)
  {
    $("#new_attribute").hide();
   $("#addattributes").hide();
  }
  else {


   $("#new_attribute").show();
   $("#addattributes").show();
}
});

$("#select_anotherz").change(function(){
  
  alert($(this).val());
    if($("#select_anotherz").val() == 0)
  {
     
    $("#addattributes1").hide();

  }
  else {
   $("#addattributes1").show();
}
});

  });


  
  

$(document).on('click', '.add_attrs', function() {

    var html1 = '';
 

html1 += '<div class="row mb-3" id="" >';
html1 += '<label for="title" class="col-md-4 col-form-label text-md-right">{{ __("Select Another Attribute") }}</label>';
html1 += '<div class="col-md-6">';
html1 += '<select class="category form-control" name="category_id" id="select_anotherz">';
html1 += '<option value="0">Select Attributes</option>';
html1 += '<option value="1">asd</option>';
html1 += '</select>';
html1 += '</div>';
html1 += '<div class="col-md-2">';
html1 += '<button class="btn btn-primary" id="addattributes1" style="display:none" >Add Variations</button>';
html1 += '</div>';
html1 += '</div>';



$('#add_attrz').append(html1);
$("#btn-dd").attr( "style", "display: none !important;" )

});

$(document).on('click', '#addattributes1', function() {


    var html = '';
 

 html += '<div class="col-md-11">';
 html += '<div class="row">';
 html += '<h2 class="text-center py-3">Add Variations</h2>';
 html += '<label for="Value" class="col-md-4 col-form-label text-md-right my-3">';
 html += '{{ __(" Value") }}';
 html += '</label>';

 html += '<div class="col-md-6">';
 html += '<input id="varient" type="text" class="form-control my-3" name="value" placeholder="Enter The Product Varient" required autocomplete="price" autofocus>';

 html += '</div>';

 html += '<label for="price" class="col-md-4 col-form-label text-md-right my-3">';
 html += '{{ __(" Price") }}';
 html += '</label>';

 html += '<div class="col-md-6">';
 html += '<input id="varient" type="text" class="form-control my-3" name="price" placeholder="Enter The Product Varient" required autocomplete="price" autofocus>';

 html += '</div>';


 html += '<label for="stock" class="col-md-4 col-form-label text-md-right my-3">';
 html += '{{ __("Stock ") }}';
 html += '</label>';

 html += '<div class="col-md-6">';
 html += '<input id="varient" type="text" class="form-control my-3" name="stock" placeholder="Enter The Product Varient" required autocomplete="price" autofocus>';

 html += '</div>';


 html += '<label for="title" class="col-md-4 col-form-label text-md-right my-3">';
 html += '{{ __("Sku") }}';
 html += '</label>';

 html += '<div class="col-md-6">';
 html += '<input id="varient" type="text" class="form-control my-3" name="Sku" placeholder="Enter The Product Varient" required autocomplete="price" autofocus>';

 html += '</div>';

 html += '<label for="title" class="col-md-4 col-form-label text-md-right my-3">';
 html += '{{ __("Image") }}';
 html += '</label>';

 html += '<div class="col-md-6">';
 html += '<input id="varient" type="file" class="form-control my-3" name="sku" placeholder="Enter The Product Varient" required autocomplete="price" autofocus>';

 html += '</div>';


 html += '<div class="col-md-12 d-flex justify-content-center">';
 html += '<button class="btn btn-primary add_attrs"  style="margin-right:10px">Add More Attributes</button>';
 html += '<button class="btn btn-success">Submit</button>';
 html += '</div>';



 html += '</div>';


 $('#new_attribute').append(html);
 $("#addattributes").hide();

});



//show add Nested Attributs
$(document).ready(function () {

});
</script>



