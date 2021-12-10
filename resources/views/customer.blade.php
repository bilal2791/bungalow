@extends('layouts.app')

@section('content')


<div class="container">

<div class="row">
        <div class="col-md-12">

               <a href=" {{ route('customer.create') }}" class="btn btn-primary">Create Customer</a>

        </div>
    </div>

    @if($message=Session::get('success'))
      <div class="alert alert-success">
          <p>{{ $message }} </p>
      </div>
     @endif
</div>

<div class="row justify-content-center">
        <div class="col-md-8">

              <table class="table">
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
@endsection
