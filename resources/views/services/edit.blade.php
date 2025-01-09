@extends('layouts.app')

@section('title', 'Ozgartirish')

@section('content')
    <div class="container">
        <h1 class="mt-4">O'zgartirish</h1>
        <form action="{{ route('services.update', $service->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Nomi</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ $service->title }}" required>
            </div>
            <div class="form-group">
                <label for="description">Izoh</label>
                <textarea name="description" id="description" class="form-control" rows="4" required>{{ $service->description }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Yangilash</button>
        </form>
    </div>
@endsection
