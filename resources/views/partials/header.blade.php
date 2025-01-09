<div class="header_section">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="logo">
                <a href="{{ route('home') }}"><img src="{{ asset('images/logo.png') }}" alt="Logo"></a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Asosiy</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">Biz haqimizda</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('gallery') }}">Coffee turlari</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('services.index') }}">Xizmatlar</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Aloqa</a></li>
                </ul>
            </div>
        </nav>
    </div>
</div>
