@extends('layouts.app')

@section('title', 'Biz haqimizda')

@section('content')
    <!-- About section start -->
    <div class="about_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="about_taital_main">
                        <h2 class="about_taital">Biz haqimizda</h2>
                        <p class="about_text">Full cleaning and housekeeping services for companies and households.</p>
                        <p class="about_text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text. Lorem Ipsum is simply</p>
                        <div class="read_bt">
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="about_img">
                        <img src="{{ asset('images/about-img.png') }}" alt="About Us">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About section end -->
@endsection
