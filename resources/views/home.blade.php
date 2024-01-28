@extends('layouts.app')

@section('main')
    <main>
        <div class="container">
            <div class="series badge">Current series</div>
            <ul class="comics-list">
                @foreach ($comics as $comic)
                    <li class="card">
                        <div>
                            <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                        </div>
                        <a href="about" class="title">{{ $comic['title'] }}</a>
                    </li>
                @endforeach
            </ul>
            <div class="more">
                <button class="badge">Load more</button>
            </div>
        </div>
    </main>
@endsection
