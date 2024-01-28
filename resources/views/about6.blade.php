@extends('layouts.app')

@section('main')
    <main class="about">
        <div class="container detail">
            <div class="info">
                <div class="thumb">
                    <img src="{{ $comics[6]['thumb'] }}" alt="{{ $comics[6]['title'] }}">
                </div>
                <h1>{{ $comics[6]['title'] }}</h1>
                <div class="price">US price: {{ $comics[6]['price'] }}</div>
                <p>{{ $comics[6]['description'] }}</p>
            </div>
            <div class="image">
                <img src="{{ Vite::asset('resources/img/adv.jpg') }}" alt="Adevertisement">
            </div>
        </div>
    </main>
@endsection
