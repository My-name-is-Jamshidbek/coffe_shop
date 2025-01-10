@extends('layouts.app')

@section('title', 'Xizmatlar')

@section('content')
    <!-- Services section start -->
    <div class="services_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="services_taital">Xizmatlar</h1>
                    <p class="services_text">Manage the services offered by your coffee shop.</p>
                </div>
            </div>

            @if(Auth::check())
                <!-- Add Service Button -->
                <div class="mb-3">
                    <a href="{{ route('services.create') }}" class="btn btn-primary">Qoshish</a>
                </div>
            @endif
            <!-- Services Listing -->
            <div class="services_section_2">
                <div class="row">
                    @foreach ($services as $service)
                        <div class="col-lg-4 col-sm-12 col-md-4">
                            <div class="box_main">
                                <div class="house_icon">
                                    <img src="{{ asset('images/icon1.png') }}" class="image_1" alt="{{ $service->title }}">
                                </div>
                                <h3 class="decorate_text">{{ $service->title }}</h3>
                                <p class="tation_text">{{ $service->description }}</p>

                                @if(Auth::check())
                                    <!-- Edit and Delete Buttons -->
                                    <div class="mt-3">
                                        <a href="{{ route('services.edit', $service->id) }}" class="btn btn-warning btn-sm">Ozgartirish</a>
                                        <form action="{{ route('services.destroy', $service->id) }}" method="POST" class="d-inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Ochirish</button>
                                        </form>
                                    </div>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- Services section end -->
@endsection
