@extends('layouts.app')

@section('main')
    <main class="about">
        <div class="container detail">
            <div class="info">
                <div class="thumb">
                    <img src="{{ $comics[11]['thumb'] }}" alt="{{ $comics[11]['title'] }}">
                </div>
                <h1>{{ $comics[11]['title'] }}</h1>
                <div class="price">US price: {{ $comics[11]['price'] }}</div>
                <p>{{ $comics[11]['description'] }}</p>
            </div>
            <div class="image">
                <img src="{{ Vite::asset('resources/img/adv.jpg') }}" alt="Adevertisement">
            </div>
        </div>
    </main>
@endsection
