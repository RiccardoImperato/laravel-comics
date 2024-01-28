@extends('layouts.app')

@section('main')
    <main class="about">
        <div class="container detail">
            <div class="info">
                <div class="thumb">
                    <img src="{{ $comics[3]['thumb'] }}" alt="{{ $comics[3]['title'] }}">
                </div>
                <h1>{{ $comics[3]['title'] }}</h1>
                <div class="price">US price: {{ $comics[3]['price'] }}</div>
                <p>{{ $comics[3]['description'] }}</p>
            </div>
            <div class="image">
                <img src="{{ Vite::asset('resources/img/adv.jpg') }}" alt="Adevertisement">
            </div>
        </div>
    </main>
@endsection
