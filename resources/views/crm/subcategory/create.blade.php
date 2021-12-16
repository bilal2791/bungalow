@extends('crm.layouts.crmapp')


@section('content')


<div class="row justify-content-center bg-white shadow mt-4 mx-3 pb-3">
    <div class="col-lg-11">
<form method="POST" action="{{route('subcategory.store')}}" class="my-4">
 @csrf
    <div class="row mb-3">


        <div class="row mb-3">
            <label for="name" class="col-md-4 col-form-label text-md-right">Select Sub Category</label>
             <div class="col-md-6">
            <select class="form-control" name="SubCategory_id">
              
                <option>Select Sub Category</option>
                @foreach($subcategory as $cat)
                <option value="{{$cat->id}}">{{$cat->name}}</option>

                    @endforeach
            </select>
            </div>

</div>

 <div class="row mb-3">

                <label for="name" class="col-md-4 col-form-label text-md-right">Name of The Sub Category</label>
             <div class="col-md-6">
                 <input id="name" type="name" name="name"  placeholder="Enter the Category Name" value="" required="required" class="form-control ">
                </div>

            </div>
                       </div>
                       <div class="row mb-3">
                           <div class="col-lg-4"></div>
                           <div class="col-lg-4">
                           <input type="submit"  value="Add Category" class="btn btn-success"/>
</div>
</div>
                    </form>
    </div>
</div>


@endsection
