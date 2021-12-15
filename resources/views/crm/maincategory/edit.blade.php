@extends('crm.layouts.crmapp')


@section('content')


<div class="row justify-content-center bg-white shadow mt-4 mx-3 pb-3">
    <div class="col-lg-11">
        <h1 class="my-4">Update The Record</h1>
<form action="{{route('main-category.update',$mainCategory->id)}}" method="POST"  class="my-4">

@csrf
@method('PUT')
      

     

 <div class="row mb-3">

         <label for="name" class="col-md-4 col-form-label text-md-right">Update Category</label>
        <div class="col-md-6">
         <input id="name" type="name" name="name" value="{{$mainCategory->name}}" placeholder="Enter the Category Name" value="" required="required" class="form-control ">
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
