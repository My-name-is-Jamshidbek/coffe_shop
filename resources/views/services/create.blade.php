@extends('layouts.app')

@section('title', 'Qoshish')

@section('content')
    <div class="container">
        <h1 class="mt-4">Qo'shish</h1>
        <form action="{{ route('services.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Nomi</label>
                <input type="text" name="title" id="title" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="description">Izoh</label>
                <textarea name="description" id="description" class="form-control" rows="4" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Saqlash</button>
        </form>
    </div>
@endsection
