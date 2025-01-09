@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
    <!-- Contact section start -->
    <div class="contact_section layout_padding">
        <div class="container">
            <h1 class="contact_text">Contact Us</h1>
        </div>
    </div>
    <div class="contact_section_2 layout_padding">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 padding_0">
                    <div class="mail_section">
                        <div class="email_text">
                            <form>
                                <div class="form-group">
                                    <input type="text" class="email-bt" placeholder="Name" name="name">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="email-bt" placeholder="Email" name="email">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="email-bt" placeholder="Phone Number" name="phone">
                                </div>
                                <div class="form-group">
                                    <textarea class="massage-bt" placeholder="Message" rows="5" name="message"></textarea>
                                </div>
                                <div class="send_btn">
                                    <button type="submit" class="main_bt">SEND</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 padding_0">
                    <div class="map-responsive">
                        <iframe
                            src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Eiffel+Tower+Paris+France"
                            width="600"
                            height="508"
                            frameborder="0"
                            style="border:0; width: 100%;"
                            allowfullscreen>
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact section end -->

    <!-- Footer section start -->
    <div class="footer_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <h3 class="useful_text">About</h3>
                    <p class="footer_text">consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <h3 class="useful_text">Menu</h3>
                    <ul class="footer_menu">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="{{ url('/about') }}">About Us</a></li>
                        <li><a href="{{ url('/gallery') }}">Gallery</a></li>
                        <li><a href="{{ url('/services') }}">Services</a></li>
                        <li><a href="{{ url('/contact') }}">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <h3 class="useful_text">Useful Link</h3>
                    <p class="dummy_text">Adipiscing Elit, sed do Eiusmod Tempor incididunt</p>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <h3 class="useful_text">Contact Us</h3>
                    <ul class="location_text">
                        <li><i class="fa fa-map-marker" aria-hidden="true"></i> Address: Loram Ipusm</li>
                        <li><i class="fa fa-phone" aria-hidden="true"></i> Call: +01 1234567890</li>
                        <li><i class="fa fa-envelope" aria-hidden="true"></i> Email: demo@gmail.com</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer section end -->
@endsection
