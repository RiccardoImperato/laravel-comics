@extends('layouts.app')

@section('main')
    <main>
        <div class="container">
            <div class="series badge">Current series</div>
            <ul class="comics-list">
                @foreach ($comics as $key => $comic)
                    <li class="card">
                        <a href="about{{ $key }}">
                            <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                            <div class="title">{{ $comic['title'] }}</div>
                        </a>
                    </li>
                @endforeach
            </ul>
            <div class="more">
                <button class="badge">Load more</button>
            </div>
        </div>
        <div class="banner">
            <div class="container">
                <ul>
                    <li>
                        <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}">
                        <a href="#">
                            Digital comics
                        </a>
                    </li>
                    <li>
                        <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}">
                        <a href="#">Dc merchandise</a>
                    </li>
                    <li>
                        <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}">
                        <a href="#">Subscription</a>
                    </li>
                    <li>
                        <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}">
                        <a href="#">Comic Shop locator</a>
                    </li>
                    <li>
                        <img src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}">
                        <a href="#">Dc power visa</a>
                    </li>
                </ul>
            </div>
        </div>
    </main>
@endsection
