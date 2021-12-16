@extends('crm.layouts.crmapp')


@section('content')


<div class="row justify-content-center bg-white shadow mt-4 mx-3 pb-3">

    <div class="col-lg-11">
    <div class="custom_table_for_data">
            <div class="col-lg-12 py-3">
                <a href="{{route('product.create')}}" type="button" class="btn btn-success">
                    <i class="fas fa-plus-circle"></i> Add
                </a>
            </div>
          <table id="custom_table" class="display" cellspacing="0" width="100%">

                <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Title</th>
                    <th>Image</th>
                     <th>Show</th>
                    <th>Edit</th>
                    <th>Delete</th>

                </tr>
                @foreach($products as $product)

                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->price; }}</td>
                    <td>{{ $product->title }}</td>
                    <td><img src="/images/{{ $product->image }}" class="img-fluid" height="85" width="85"></td>

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
                @if($products->isEmpty())
                    <tr>
                        <td colspan="9" class="text-center p-3 mb-2 bg-danger text-white">No Record Found</td>
                    </tr>
                @endif
            </table>
            {{ $products->links() }}
        </div>










</div>




</div>


</div>
    </div>
</div>


@endsection
