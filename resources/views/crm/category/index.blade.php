@extends('crm.layouts.crmapp')


@section('content')


<div class="row justify-content-center bg-white shadow mt-4 mx-3 pb-3">
    <div class="col-lg-11">
        <div class="custom_table_for_data">
            <div class="col-lg-12 py-3">
                <a href="{{route('category.create')}}" type="button" class="btn btn-success">
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
   


                  </td>
                </tr>
           
            
            </table>
       
        </div>
    </div>
</div>


@endsection
