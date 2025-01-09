@extends('layouts.app')

@section('title', 'Coffee turlari')

@section('content')
    <!-- Gallery section start -->
    <div class="gallery_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="gallery_taital">Coffee turlari</h1>
                    <p class="gallery_text">Lorem Ipsum is simply dummy text of printing typesetting industry lorem Ipsum has been the industry's standard dummy text since the 1500s.</p>
                </div>
            </div>
            <div class="">
                <div class="gallery_section_2">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="container_main">
                                <img src="{{ asset('images/img-1.png') }}" alt="Avatar" class="image">
                                <div class="overlay">
                                    <div class="text"><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="container_main">
                                <img src="{{ asset('images/img-2.png') }}" alt="Avatar" class="image">
                                <div class="overlay">
                                    <div class="text"><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="container_main">
                                <img src="{{ asset('images/img-3.png') }}" alt="Avatar" class="image">
                                <div class="overlay">
                                    <div class="text"><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="gallery_section_2">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="container_main">
                                <img src="{{ asset('images/img-4.png') }}" alt="Avatar" class="image">
                                <div class="overlay">
                                    <div class="text"><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="container_main">
                                <img src="{{ asset('images/img-5.png') }}" alt="Avatar" class="image">
                                <div class="overlay">
                                    <div class="text"><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="container_main">
                                <img src="{{ asset('images/img-6.png') }}" alt="Avatar" class="image">
                                <div class="overlay">
                                    <div class="text"><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="gallery_section_2">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="container_main">
                                <img src="{{ asset('images/img-7.png') }}" alt="Avatar" class="image">
                                <div class="overlay">
                                    <div class="text"><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="container_main">
                                <img src="{{ asset('images/img-8.png') }}" alt="Avatar" class="image">
                                <div class="overlay">
                                    <div class="text"><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="container_main">
                                <img src="{{ asset('images/img-9.png') }}" alt="Avatar" class="image">
                                <div class="overlay">
                                    <div class="text"><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="seemore_bt"><a href="#">See More</a></div>
        </div>
    </div>
    <!-- Gallery section end -->
@endsection
