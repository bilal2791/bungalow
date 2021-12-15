@extends('layouts.includes.index_app')

@section('content')
<div class="home_nav">
    @include('layouts.includes.nav')
</div>
<section id="home_hero">

    <div class="home_slider">



        <div class="slide">

            <div class="slider_inner_container home1">

                <!-- first slide   -->
                <div class="slider-content text-center">
                    <h1>Lighting</h1>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s,</p>
                    <a  href="product.php" class="btn btn-order-now">Order Now</a>
                </div>


            </div>
        </div>

        <!-- second  -->
        <div class="slide">

            <div class="slider_inner_container home2" >

                <!-- first slide   -->
                <div class="slider-content text-center">
                    <h1>Furniture</h1>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s,</p>
                    <a href="product.php" class="btn btn-order-now">Order Now</a>
                </div>


            </div>
        </div>


        <!-- third  -->

        <div class="slide">

            <div class="slider_inner_container home3" >

                <!-- first slide   -->
                <div class="slider-content text-center">
                    <h1>Interior Design</h1>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s,</p>
                    <a  href="product.php" class="btn btn-order-now">Order Now</a>
                </div>


            </div>
        </div>

    </div>

</section>
