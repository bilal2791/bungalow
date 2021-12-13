@extends('crm.layouts.crmapp')


@section('content')


<div class="row justify-content-center bg-white shadow mt-4 mx-3 pb-3">
    <div class="col-lg-11">
        <div class="custom_table_for_data">
            <div class="col-lg-12 py-3">
                <a href="{{route('customer.create')}}" type="button" class="btn btn-success">
                    <i class="fas fa-plus-circle"></i> Add
                </a>
            </div>
          <table id="custom_table" class="display" cellspacing="0" width="100%">

                <tr>
                    <th>Name</th>
                    <th>Designation</th>
                    <th>Country</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Show</th>
                    <th>Edit</th>
                    <th>Delete</th>

                </tr>
                @foreach($customers as $customer)

                <tr>
                    <td>{{ $customer->fullname }}</td>
                    <td>{{ $customer->designations->title; }}</td>
                    <td>{{ $customer->country }}</td>
                    <td>{{ $customer->email }}</td>
                    <td>{{ $customer->phone }}</td>
                    <td>{{ $customer->address }}</td>
                    <td>  <a href=" {{ route('customer.show',$customer->id) }}" class="btn btn-info">Show</a> </td>


                    <td>  <a href=" {{ route('customer.edit',$customer->id) }}" class="btn btn-info">Edit</a> </td>

                    <td>


              <form action="{{ route('customer.destroy',$customer->id) }}" method="post">

                  @method('DELETE')
                  @csrf
                  <input class="btn btn-danger" type="submit" value="Delete" />
             </form>

                    <!-- <a href=" {{ route('customer.create') }}" class="btn btn-danger">Delete</a> -->



                  </td>
                </tr>
                @endforeach
                @if($customers->isEmpty())
                    <tr>
                        <td colspan="9" class="text-center p-3 mb-2 bg-danger text-white">No Record Found</td>
                    </tr>
                @endif
            </table>
            {{ $customers->links() }}
        </div>
    </div>
</div>


@endsection
