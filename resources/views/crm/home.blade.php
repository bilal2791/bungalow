@extends('crm.layouts.crmapp')


@section('content')


<div class="row justify-content-center bg-white shadow mt-4 mx-3 pb-3">
    <div class="col-lg-11">
        <div class="custom_table_for_data">
            <div class="col-lg-12 py-3">
                <a href="" type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <i class="fas fa-plus-circle"></i> Add
                </a>
            </div>
          <table id="custom_table" class="display" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Contact</th>
                    <th>Address</th>
                    <th>Status</th>
                    <th>Actions.</th>
                </tr>
            </thead>
            <tbody>
              <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011/04/25</td>
                <td><div class="btn-group">
                  <a href="" class="btn btn-warning">
                    <i class="fas fa-pencil-alt"></i>
                  </a>
                  <a class="btn btn-danger delete" data-id="84">
                    <i class="far fa-times-circle"></i>
                  </a>
                </div>
              </td>
              </tr>
            </tbody>
          </table>
        </div>
    </div>
</div>


@endsection
