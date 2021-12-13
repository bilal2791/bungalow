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

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

{{-- @include('includes.head'); --}}


 <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand mx-auto" href="{{ url('/customer') }}" >
                    <!-- {{ config('app.name', 'CRM') }} -->
                    <img src="https://kahoodesigns.com/bungalow/crm/assets/images/logo.png" class="css-class" alt="alt text">
                </a>

                <div id="page-content-wrapper">
                    
                <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom"><div id="navbarSupportedContent" class="collapse navbar-collapse"><ul class="navbar-nav ms-auto"><li class="nav-item dropdown"><a id="navbarDropdown" class="nav-link dropdown-toggle show" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    SYED ADIL SHAH<br>
                                    mohsin@gmail.com
                                </a> <div aria-labelledby="navbarDropdown" class="dropdown-menu dropdown-menu-right show" data-bs-popper="none"><a href="http://127.0.0.1:8000/logout" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="dropdown-item">
                                        Logout
                                    </a> <form id="logout-form" action="http://127.0.0.1:8000/logout" method="POST" class="d-none"><input type="hidden" name="_token" value="2eYwBqQyTXoqFCDCBkvcW8k6iBu2dr1mrNuAegqf"></form></div></li></ul></div></nav></div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

</nav>



        <!-- /#sidebar-wrapper -->

     <div class="container-fluid">
         <div class="row">
             <div class="col-md-3" id="sidbar">

             <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="user-profile">
         
          <div class="logo">
        
          </div>
        </div>
        <ul class="list-unstyled">
          <li class="nav-item">
            <a  class="nav-link" href="">
            <i class="fas fa-home breadcum-icon"></i>
              <span class="menu-title">Home</span>
            </a>
          </li>
 
          <li class="nav-item">
            <a class="nav-link" href="products.php">
            <i class="fa fa-star breadcum-icon" aria-hidden="true"></i>
              <span class="menu-title">Products</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="category.php">
            <i class="fal fa-boxes-alt  breadcum-icon"></i> 
              <span class="menu-title">Category</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="main-menu.php">
            <i class="fas fa-bars navbar-menu  breadcum-icon"></i>
              <span class="menu-title">Main Menu</span>
            </a>
          </li>
          
      


       


      


          
         



          

       

         

        </ul>
      </nav>
             </div>
             <div class="col-md-9">
             @yield('content')
             </div>
         </div>
  
     </div>

        
      
    </div>
    </div>
</body>
</html>

