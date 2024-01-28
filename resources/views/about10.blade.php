@extends('layouts.app')

@section('main')
    <main class="about">
        <div class="container detail">
            <div class="info">
                <div class="thumb">
                    <img src="{{ $comics[10]['thumb'] }}" alt="{{ $comics[10]['title'] }}">
                </div>
                <h1>{{ $comics[10]['title'] }}</h1>
                <div class="price">US price: {{ $comics[10]['price'] }}</div>
                <p>{{ $comics[10]['description'] }}</p>
            </div>
            <div class="image">
                <img src="{{ Vite::asset('resources/img/adv.jpg') }}" alt="Adevertisement">
            </div>
        </div>
    </main>
@endsection
