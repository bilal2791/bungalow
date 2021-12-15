@extends('crm.layouts.crmapp')


@section('content')

 
<div class="row justify-content-center bg-white shadow mt-4 mx-3 pb-3">
    <div class="col-lg-11">
        <h1 class="my-4">Show Details</h1>

    <h4>ID: {{$mainCategory->id}}</h4>
    <h4>Main Category Name: <b>{{$mainCategory->name}}</b></h4>

           
    </div>
</div>


@endsection
