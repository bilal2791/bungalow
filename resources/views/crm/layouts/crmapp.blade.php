<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'CRM') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>


    <!-- css of datatable  -->
    <link rel="stylesheet" href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

{{-- @include('includes.head'); --}}


    <div id="app" class="main-app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand mx-auto" href="{{ url('/customer') }}" >
                    <!-- {{ config('app.name', 'CRM') }} -->
                    <img src="https://kahoodesigns.com/bungalow/crm/assets/images/logo.png" class="css-class" alt="alt text">
                </a>

                <div id="page-content-wrapper">

                    <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                        <div id="navbarSupportedContent" class="collapse navbar-collapse">
                            <ul class="navbar-nav ms-auto">
                                <li class="nav-item dropdown" id="add">
                                    <a id="navbarDropdown " class="nav-link dropdown-toggle show" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        {{ Auth::user()->name }}
                                    </a>

                                    <div class="navdrop_item" style="display: none">
                                        <a href="/logout"   class="dropdown-item">
                                                {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{route('logout')}}" method="POST" class="d-none">
                                            <input type="hidden" name="_token" value="2eYwBqQyTXoqFCDCBkvcW8k6iBu2dr1mrNuAegqf">
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>



        <!-- /#sidebar-wrapper -->

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2" id="sidebar">
                    @include('crm.includes.sidebar')
                </div>
                <div class="col-md-10">
                @yield('content')
                </div>
            </div>

        </div>





    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>



	  <script>


        $("#product_id").click(function(){
                alert("The paragraph was clicked.");
              });

              $(document).on('click','#add',function(){

                $('.navdrop_item').toggle();

              });


	  </script>
</body>
</html>

