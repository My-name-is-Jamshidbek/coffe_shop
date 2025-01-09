@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="banner_section layout_padding">
        <div class="container">
            <div id="main_slider" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="banner_taital">
                                    <h1 class="coffee_text">Coffee Shop</h1>
                                    <p class="there_text">Dunyoning eng yaxshi kofe xushbo'yligi bilan tanishing!</p>
                                    <div class="learnmore_bt"><a href="#">Ko'rish</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Add more slides if necessary -->
                </div>
                <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
            </div>
        </div>
    </div>
    <div class="about_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="about_taital_main">
                        <h2 class="about_taital">Biz haqimizda</h2>
                        <p class="about_text">Biz  kofe ixlosmandlari uchun yaratilgan o'ziga xos joymiz.</p>
                        <div class="read_bt"><a href="#">Ko'proq</a></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="about_img"><img src="{{ asset('images/about-img.png') }}" alt="About Us"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="gallery_section layout_padding">
        <div class="container">
            <h1 class="gallery_taital">Coffee turlari</h1>
            <div class="row">
                <div class="col-md-4"><img src="{{ asset('images/img-1.png') }}" alt="Coffee"></div>
                <div class="col-md-4"><img src="{{ asset('images/img-2.png') }}" alt="Coffee"></div>
                <div class="col-md-4"><img src="{{ asset('images/img-3.png') }}" alt="Coffee"></div>
            </div>
        </div>
    </div>
@endsection
