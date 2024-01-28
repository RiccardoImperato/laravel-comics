@extends('layouts.app')

@section('main')
    <main class="about">
        <div class="container detail">
            <div class="info">
                <div class="thumb">
                    <img src="{{ $comics[0]['thumb'] }}" alt="{{ $comics[0]['title'] }}">
                </div>
                <h1>{{ $comics[0]['title'] }}</h1>
                <div class="price">US price: {{ $comics[0]['price'] }}</div>
                <p>{{ $comics[0]['description'] }}</p>
            </div>
            <div class="image">
                <img src="{{ Vite::asset('resources/img/adv.jpg') }}" alt="Adevertisement">
            </div>
        </div>
    </main>
@endsection
