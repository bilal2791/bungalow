<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'CRM') }}</title>

    <!-- Scripts -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- fontawsome css  -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('slick/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('slick/slick-theme.css') }}" rel="stylesheet">
</head>
<body>


    <div class="">
        <main class="">

            @yield('content')
        </main>
    </div>


    <footer>
        <div class="container">


            <div class="row footer_top mb-1">
                <div class="col-lg-3 ">
                    <div class="footer_inner_item">
                      <img src="{{ asset('img/bungalowltd_1.png') }}" alt="" class="img-fluid">
                      <div class="footer_first_sicons p-0">
                        <ul>
                            <li><a href=""><i class="fab fa-instagram"></i></a></li>
                            <li><a href=""><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href=""><i class="fab fa-twitter"></i></a></li>
                            <li><a href=""><i class="fab fa-youtube"></i></a></li>
                        </ul>
                      </div>
                    </div>
                </div>


                <div class="col-lg-5 mb-1">
                    <div class="footer_inner_item">

                        <h4>Contact Us</h4>
                        <ul class="contact_us_icons">
                            <li><a href=""><i class="fas fa-map-marker-alt"></i></a> Bungalow Ltd.</li>
                            <li><a href=""><i class="fas fa-map-marker-alt"></i></a> 23706 Malibu Road Malibu, California 90265</li>
                            <li><a href=""><i class="fas fa-phone-alt"></i></a> 424.644.0344</li>
                            <li><a href=""><i class="far fa-envelope"></i></a> bungalow2go@bungalowltd.com</li>
                            <li><a href=""><i class="far fa-envelope"></i></a> bungalow2go@bungalowltd.com</li>
                            <li><a href="return-exchange.php">Return & Exchange</a></li>
                            <li><a href="stock-check.php">STOCK CHECK & SHIPPING</a></li>


                        </ul>
                    </div>
                </div>


                <div class="col-lg-4 mb-1">
                    <div class="footer_inner_item">
                    <h4>Let's Keep In Touch!</h4>
                    <input class="form-control" id="disabledInput" type="text" placeholder="Email Address" >
                    <button type="submit" class="btn btn-subscribe">Subscribe</button>
                    </div>
                </div>

            </div>





            <div class="footer_bottom d-lg-flex justify-content-between align-items-center">
                <div class="footer_bottom_left">
                    <h5>© 2021, Bungalow Ltd.</h5>
                </div>

                <div class="footer_bottom_right">
                    <a href=""><img src="{{ asset('img/card1.png')}}" alt="ATM Cards" class="mb-1"></a>
                    <a href=""> <img src="{{ asset('img/card2.png')}}" alt="ATM Cards" class="mb-1"></a>
                    <a href=""> <img src="{{ asset('img/card3.png')}}" alt="ATM Cards" class="mb-1"></a>
                    <a href=""><img src="{{ asset('img/card4.png')}}" alt="ATM Cards" class="mb-1"></a>
                    <a href=""><img src="{{ asset('img/card5.png')}}" alt="ATM Cards" class="mb-1"></a>
                    <a href=""><img src="{{ asset('img/card6.png')}}" alt="ATM Cards" class="mb-1"></a>
                    <a href=""> <img src="{{ asset('img/card7.png')}}" alt="ATM Cards" class="mb-1"></a>
                    <a href=""><img src="{{ asset('img/card8.png')}}" alt="ATM Cards" class="mb-1"></a>
                </div>
            </div>
        </div>
    </footer>


    <!-- Scripts -->
    <script src="{{ asset('js/jquery.js') }}" defer></script>
    <script src="{{ asset('slick/slick.min.js') }}" defer></script>
    <script src="{{ asset('js/main.js') }}" defer></script>
    <script src="{{ asset('js/app.js') }}" defer></script>



</body>
</html>

