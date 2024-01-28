@extends('layouts.app')

@section('main')
    <main class="about">
        <div class="container detail">
            <div class="info">
                <div class="thumb">
                    <img src="{{ $comics[2]['thumb'] }}" alt="{{ $comics[2]['title'] }}">
                </div>
                <h1>{{ $comics[2]['title'] }}</h1>
                <div class="price">US price: {{ $comics[2]['price'] }}</div>
                <p>{{ $comics[2]['description'] }}</p>
            </div>
            <div class="image">
                <img src="{{ Vite::asset('resources/img/adv.jpg') }}" alt="Adevertisement">
            </div>
        </div>
    </main>
@endsection
