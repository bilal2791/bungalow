@extends('crm.layouts.crmapp')


@section('content')


<div class="row justify-content-center bg-white shadow mt-4 mx-3 pb-3">
    <div class="col-lg-11">
<form action="{{ route('main-category.store') }}" method="POST"  class="my-4">
 @csrf

      

     

 <div class="row mb-3">

         <label for="name" class="col-md-4 col-form-label text-md-right">Name of The Category</label>
        <div class="col-md-6">
         <input id="name" type="name" name="name"  placeholder="Enter the Category Name" value="" required="required" class="form-control ">
     </div>

            </div> 
                 
                       <div class="row mb-3">
                           <div class="col-lg-4"></div>
                           <div class="col-lg-4">
                         <button type="submit" class="btn btn-success">Add Main Menu</button>

                        </div>
</div>
                        </form>


           
    </div>
</div>


@endsection
