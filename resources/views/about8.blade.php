@extends('layouts.app')

@section('main')
    <main class="about">
        <div class="container detail">
            <div class="info">
                <div class="thumb">
                    <img src="{{ $comics[8]['thumb'] }}" alt="{{ $comics[8]['title'] }}">
                </div>
                <h1>{{ $comics[8]['title'] }}</h1>
                <div class="price">US price: {{ $comics[8]['price'] }}</div>
                <p>{{ $comics[8]['description'] }}</p>
            </div>
            <div class="image">
                <img src="{{ Vite::asset('resources/img/adv.jpg') }}" alt="Adevertisement">
            </div>
        </div>
    </main>
@endsection
