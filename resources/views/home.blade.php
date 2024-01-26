@extends('layouts.app')

@section('main')
    <main>
        <ul class="container comics-list">
            @foreach ($comics as $comic)
                <li class="card">
                    <div>
                        <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                    </div>
                    <div class="title">{{ $comic['title'] }}</div>

                </li>
            @endforeach
        </ul>
    </main>
@endsection
