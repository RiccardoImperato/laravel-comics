@extends('layouts.app')

@section('main')
    <main class="about">
        <div class="container detail">
            <div class="info">
                <div class="thumb">
                    <img src="{{ $comics[5]['thumb'] }}" alt="{{ $comics[5]['title'] }}">
                </div>
                <h1>{{ $comics[5]['title'] }}</h1>
                <div class="price">US price: {{ $comics[5]['price'] }}</div>
                <p>{{ $comics[5]['description'] }}</p>
            </div>
            <div class="image">
                <img src="{{ Vite::asset('resources/img/adv.jpg') }}" alt="Adevertisement">
            </div>
        </div>
    </main>
@endsection
