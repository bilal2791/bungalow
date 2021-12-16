@extends('layouts.app')

@section('content')
<div class="container">










<div class="row justify-content-center">

        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create Product') }}</div>

                <div class="card-body">

                    <form method="POST" action="{{ route('product.store') }}" enctype="multipart/form-data">

                        @csrf

              <div class="row mb-3">
                            <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autocomplete="title" autofocus>

                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


 <div class="row mb-3">
                            <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Image') }}</label>

                            <div class="col-md-6">
                                <input type="file" name="productImage" id="productImage">
                            </div>
                        </div>



                        <div class="row mb-3">
                            <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('Price') }}</label>

                            <div class="col-md-6">
                               <input id="price" type="text" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}" required autocomplete="price" autofocus>

                                @error('price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


        <div class="row mb-3">
                            <label for="Description" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

                            <div class="col-md-6">
                               <textarea class="form-control @error('description') is-invalid @enderror" name="description">{{ old('description') }}</textarea>
                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>




                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Create') }}
                                </button>
                            </div>
                        </div>




        </div>


</div>


   <div class="custom_table_for_data">
            <div class="col-lg-12 py-3">
                <a href="" type="button" class="btn btn-success">
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
@endsection
