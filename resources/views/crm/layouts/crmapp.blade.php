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
<<<<<<< HEAD
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>


    <!-- css of datatable  -->
=======
  <!-- css of datatable  -->
>>>>>>> cd4aa3770dd62ad8c6ad7365c02d87244a3323da
    <link rel="stylesheet" href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

{{-- @include('includes.head'); --}}


<<<<<<< HEAD
    <div id="app" class="main-app">
=======
 <div id="app">
>>>>>>> cd4aa3770dd62ad8c6ad7365c02d87244a3323da
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand mx-auto" href="{{ url('/customer') }}" >
                    <!-- {{ config('app.name', 'CRM') }} -->
                    <img src="https://kahoodesigns.com/bungalow/crm/assets/images/logo.png" class="css-class" alt="alt text">
                </a>


<<<<<<< HEAD
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
=======
                <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>

                <div id="page-content-wrapper">

        
</nav>
>>>>>>> cd4aa3770dd62ad8c6ad7365c02d87244a3323da



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

<<<<<<< HEAD

=======
  	<!-- for js of Datatables  -->
  	<script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
  	<script src="https://cdn.tiny.cloud/1/4t2wjwkuckdyotsl0s30mij4lsjh4e1f3005x1ykbqruct0c/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
	<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
>>>>>>> cd4aa3770dd62ad8c6ad7365c02d87244a3323da

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

