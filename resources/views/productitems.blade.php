@extends('layouts.includes.index_app')

@section('content')
<div class="home_nav">
    @include('layouts.includes.nav')
</div>

<section id="product">
    <div class="product_title text-center">
        <h1>Products</h1>
    </div>

    <div class="prduct_bar">
        <div class="container">
            <div class="row product-bar-wrapper align-items-center">
                @include('layouts.includes.product_group');
                hello
            </div>
        </div>
    </div>
    </div>
</section>
