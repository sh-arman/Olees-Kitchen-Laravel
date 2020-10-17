@extends('layouts.layout')
@section('title', 'Olees Kitchen | Home')
@section('content')





<!-- section category -->
@include('layouts.category')
<!-- end section category -->
<!-- Section item -->
<section class="item">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <p class="card-header item_header">Tandoori Specialities</p>
                <!-- item row -->
                <div class="row item_block">
                    <!-- item  -->
                    <div class="item_box col col-6 col-md-4 col-sm-6">
                        <div class="item_img_box">
                            <img class="item_img" src="{{ asset('img/pasanda.jpeg') }}" alt="">
                        </div>
                        <h5 class="item_price">Tk 240</h5>
                        <p class="item_details">
                            <span class="item_details--1">20-30 Min</span>
                            <span class="item_details--1">Delivery: 10 Tk</span>
                        </p>
                        <div class="item_add" href="#">
                            <a class="item_add_text" href="#">Add to cart
                                <img class="item_add_img" src="{{ asset('img/add to cart.png') }}" alt="">
                            </a>
                        </div>
                    </div>
                    <!-- item -->

                    <!-- item  -->
                    <div class="item_box col col-6 col-md-4 col-sm-6">
                        <div class="item_img_box">
                            <img class="item_img" src="{{ asset('img/pasanda.jpeg') }}" alt="">
                        </div>
                        <h5 class="item_price">Tk 240</h5>
                        <p class="item_details">
                            <span class="item_details--1">20-30 Min</span>
                            <span class="item_details--1">Delivery: 10 Tk</span>
                        </p>
                        <div class="item_add" href="#">
                            <a class="item_add_text" href="#">Add to cart
                                <img class="item_add_img" src="{{ asset('img/add to cart.png') }}" alt="">
                            </a>
                        </div>
                    </div>
                    <!-- item -->

                    <!-- item  -->
                    <div class="item_box col col-6 col-md-4 col-sm-6">
                        <div class="item_img_box">
                            <img class="item_img" src="{{ asset('img/pasanda.jpeg') }}" alt="">
                        </div>
                        <h5 class="item_price">Tk 240</h5>
                        <p class="item_details">
                            <span class="item_details--1">20-30 Min</span>
                            <span class="item_details--1">Delivery: 10 Tk</span>
                        </p>
                        <div class="item_add" href="#">
                            <a class="item_add_text" href="#">Add to cart
                                <img class="item_add_img" src="{{ asset('img/add to cart.png') }}" alt="">
                            </a>
                        </div>
                    </div>
                    <!-- item -->

                    <!-- item  -->
                    <div class="item_box col col-6 col-md-4 col-sm-6">
                        <div class="item_img_box">
                            <img class="item_img" src="{{ asset('img/pasanda.jpeg') }}" alt="">
                        </div>
                        <h5 class="item_price">Tk 240</h5>
                        <p class="item_details">
                            <span class="item_details--1">20-30 Min</span>
                            <span class="item_details--1">Delivery: 10 Tk</span>
                        </p>
                        <div class="item_add" href="#">
                            <a class="item_add_text" href="#">Add to cart
                                <img class="item_add_img" src="{{ asset('img/add to cart.png') }}" alt="">
                            </a>
                        </div>
                    </div>
                    <!-- item -->
                </div>
                <!-- end item row -->
            </div>
            <div class="col-md-4">
                <div class="card">
                    <p class="card-header item_header">Your Cart Item: 0</p>

                    <!-- cart item  -->
                    <div class="cart">
                        <div class="cart_body">
                            <div class="cart_body--left">
                                <div class="cart_img_box">
                                    <img class="cart_img" src="{{ asset('img/masla.png') }}" alt="">
                                </div>
                            </div>
                            <div class="cart_body--right">
                                <p class="cart_title">Morog Polao</p>
                                <p class="cart_price">220 Tk</p>
                                <div class="cart_input_box">
                                    <input class="cart_input" type="number" name="" value="1">
                                </div>
                                <a class="" href="#"><img class="cart_input_textimg" src="{{ asset('img/delete.png') }}" alt=""> </a>
                            </div>
                        </div>
                    </div>
                    <!-- end cart item  -->

                    <!-- cart item  -->
                    <div class="cart">
                        <div class="cart_body">
                            <div class="cart_body--left">
                                <div class="cart_img_box">
                                    <img class="cart_img" src="{{ asset('img/Malaya Dishes.png') }}" alt="">
                                </div>
                            </div>
                            <div class="cart_body--right">
                                <p class="cart_title">Tandoori Dish</p>
                                <p class="cart_price">350 Tk</p>
                                <div class="cart_input_box">
                                    <input class="cart_input" type="number" name="" value="1">
                                </div>
                                <a class="" href="#"><img class="cart_input_textimg" src="{{ asset('img/delete.png') }}" alt=""> </a>
                            </div>
                        </div>
                    </div>
                    <!-- end cart item  -->

                    <!-- cart item  -->
                    <div class="cart">
                        <div class="cart_body">
                            <div class="cart_body--left">
                                <div class="cart_img_box">
                                    <img class="cart_img" src="{{ asset('img/Kashmiri Dishes.png') }}" alt="">
                                </div>
                            </div>
                            <div class="cart_body--right">
                                <p class="cart_title">Hydrabadi Biriyani</p>
                                <p class="cart_price">180 Tk</p>
                                <div class="cart_input_box">
                                    <input class="cart_input" type="number" name="" value="1">
                                </div>
                                <a class="" href="#"><img class="cart_input_textimg" src="{{ asset('img/delete.png') }}" alt=""> </a>
                            </div>
                        </div>
                    </div>
                    <!-- end cart item  -->

                    <!-- vouchet  -->
                    <div class="voucher">
                        <form class="" action="index.html" method="post">
                            <label class="voucher_level" for="vou">Apply a voucher</label>
                            <input class="voucher_input" id="vou" type="text" name="" placeholder="Voucher code...">
                            <button class="voucher_button" type="submit" name="submit">Apply</button>
                        </form>
                        <div class="total">
                            <div class="total_box">
                                <p>Delivery Charge : </p>
                                <p>10 Tk</p>
                            </div>
                            <div class="total_box">
                                <p>SubTotal : </p>
                                <p>750 Tk</p>
                            </div>
                            <hr>
                            <div class="total_box">
                                <p>Total : </p>
                                <p>760 Tk</p>
                            </div>
                        </div>
                        <button class="total_button" type="submit" name="button">Place order</button>
                    </div>
                    <!-- end voucher -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section item -->

@endsection
