@extends('frontend.layouts.master')
@section('title', 'home')
@section('content')

    <main>
        <!--? slider Area Start-->
        <div class="slider-area ">
            <div class="slider-active">
                <div class="single-slider hero-overly2  slider-height2 d-flex align-items-center slider-bg2">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-lg-8 col-md-8">
                                <div class="hero__caption hero__caption2">
                                    <h1 data-animation="fadeInUp" data-delay=".4s">About</h1>
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                            <li class="breadcrumb-item"><a href="#">About</a></li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->
        <!--? About Area Start -->
        <div class="about-area section-padding40">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="section-tittle mb-60 text-center pt-10">
                            <h2>Our Story</h2>
                            <p class="pera">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="about-img pb-bottom">
                            <img src="assets/img/gallery/about1.png" alt="" class="w-100">
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="section-tittle mb-60 text-center pt-10">
                            <h2>Journey start from</h2>
                            <p class="pera">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="about-img pb-bottom">
                            <img src="assets/img/gallery/about2.png" alt="" class="w-100">
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="section-tittle text-center pt-10">
                            <h2>2020</h2>
                            <p class="pera">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About Area End -->
        <!--? instagram-social start -->
        <div class="instagram-area pb-padding">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="instra-tittle mb-40">
                            <div class="section-tittle">
                                <img src="assets/img/gallery/xinsta.png.pagespeed.ic.SHkpZNWK8D.png" alt="">
                                <h2>Get Inspired with Instagram</h2>
                                <P class="mb-35">Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla.</P>
                                <a href="#" class="border-btn">Discover More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-8">
                        <div class="row no-gutters">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <img src="assets/img/gallery/xinstra1.png.pagespeed.ic.zuAp3Ip0sA.jpg" alt="" class="w-100">
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <img src="assets/img/gallery/xinstra2.png.pagespeed.ic.jeijzRXwzz.jpg" alt="" class="w-100">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- instagram-social End -->
        <!--? Services Area Start -->
        <div class="categories-area section-padding40 gray-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-cat mb-50 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                            <div class="cat-icon">
                                <img src="assets/img/icon/services1.svg" alt="">
                            </div>
                            <div class="cat-cap">
                                <h5>Fast & Free Delivery</h5>
                                <p>Free delivery on all orders</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-cat mb-50 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                            <div class="cat-icon">
                                <img src="assets/img/icon/services2.svg" alt="">
                            </div>
                            <div class="cat-cap">
                                <h5>Secure Payment</h5>
                                <p>Free delivery on all orders</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-cat mb-50 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                            <div class="cat-icon">
                                <img src="assets/img/icon/services3.svg" alt="">
                            </div>
                            <div class="cat-cap">
                                <h5>Money Back Guarantee</h5>
                                <p>Free delivery on all orders</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-cat mb-50 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                            <div class="cat-icon">
                                <img src="assets/img/icon/services4.svg" alt="">
                            </div>
                            <div class="cat-cap">
                                <h5>Online Support</h5>
                                <p>Free delivery on all orders</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--? Services Area End -->
    </main>
@endsection
