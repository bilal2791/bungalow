@extends('crm.layouts.crmapp')


@section('content')


<div class="row justify-content-center bg-white shadow mt-4 mx-3 pb-3">
    <div class="col-lg-11">
        <div class="custom_table_for_data">
            <div class="col-lg-12 py-3">
                <a href="{{route('subcategory.create')}}" type="button" class="btn btn-success">
                    <i class="fas fa-plus-circle"></i> Add
                </a>
            </div>
          <table id="custom_table" class="display" cellspacing="0" width="100%">

                <tr>
                    <th>ID</th>
                    <th>Main Category</th>
                   <th>Category</th>

                </tr>

                @foreach ($subcategory as $cat )

                <tr>
                    <td>{{ $cat->id }}</td>
                     <td>{{ $cat->category->name }}</td>
                      <td>{{ $cat->name }}</td>

                </tr>
               @endforeach

            </table>

        </div>
    </div>
</div>


@endsection
