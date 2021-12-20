@extends('crm.layouts.crmapp')


@section('content')


<div class="row justify-content-center bg-white shadow mt-4 mx-3 pb-3">

    <div class="col-lg-11">
    <div class="custom_table_for_data">
            <div class="col-lg-12 py-3">
                <a href="{{route('product-attribute.create')}}" type="button" class="btn btn-success">
                    <i class="fas fa-plus-circle"></i> Add
                </a>
            </div>
            <h1 class="py-5 text-center">List of Attributes</h1>
          <table id="custom_table" class="display" cellspacing="0" width="100%">

                <tr>
                    <th>Name</th>
                    <th>Show</th>
                    <th>Edit</th>
                    <th>Delete</th>

                </tr>
                @foreach($productattr as $attr)

                <tr>
                    <td>{{ $attr->name }}</td>
             
                    <td>  <a href="" class="btn btn-info">Show</a> </td>
               


                    <td>  <a href="" class="btn btn-info">Edit</a> </td>

                    <td>


              <form action="" method="post">

                  @method('DELETE')
                  @csrf
                  <input class="btn btn-danger" type="submit" value="Delete" />
             </form>

                    <!-- <a href=" " class="btn btn-danger">Delete</a> -->



                  </td>
                </tr>
                @endforeach
          
            
            </table>

        </div>










</div>




</div>


</div>
    </div>
</div>


@endsection
