@extends('layouts.app')

@section('main')
    <main class="about">
        <div class="container detail">
            <div class="info">
                <div class="thumb">
                    <img src="{{ $comics[1]['thumb'] }}" alt="{{ $comics[1]['title'] }}">
                </div>
                <h1>{{ $comics[1]['title'] }}</h1>
                <div class="price">US price: {{ $comics[1]['price'] }}</div>
                <p>{{ $comics[1]['description'] }}</p>
            </div>
            <div class="image">
                <img src="{{ Vite::asset('resources/img/adv.jpg') }}" alt="Adevertisement">
            </div>
        </div>
    </main>
@endsection
