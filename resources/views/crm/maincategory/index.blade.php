@extends('crm.layouts.crmapp')


@section('content')


<div class="row justify-content-center bg-white shadow mt-4 mx-3 pb-3">
@if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif
    <div class="col-lg-11">
        <div class="custom_table_for_data">
            <div class="col-lg-12 py-3">
                <a href="{{route('main-category.create')}}" type="button" class="btn btn-success">
                    <i class="fas fa-plus-circle"></i> Add
                </a>
            </div>
          <table id="custom_table" class="display" cellspacing="0" width="100%">

                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th class="">Action</th>



                </tr>

                @foreach($mainCategory as $maincat)
                <tr>
                <th>{{$maincat->id}}</th>
                <th>{{$maincat->name}}</th>
                <th>
                <a href="{{route('main-category.edit',$maincat->id)}}" class="btn btn-primary">Edit</a>
                <a href="{{route('main-category.show',$maincat->id)}}" class="btn btn-success">Show</a>

                <form action="{{ route('main-category.destroy', $maincat->id)}}" method="post" class="d-inline">
                  @csrf
                  @method('DELETE')

                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </th>


                </tr>

                @endforeach

                @if($mainCategory->isEmpty())
                <tr>
                        <td colspan="9" class="text-center p-3 mb-2 bg-danger text-white">No Record Found</td>
                    </tr>
                @endif





            </table>

        </div>
    </div>
</div>


@endsection
