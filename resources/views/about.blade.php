@extends('layouts.app')

@section('main')
    <main class="about">
        <div class="container detail">
            <div class="info">
                <h1>Action comics #1000</h1>
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, eveniet illo ipsam, iste ea
                    dignissimos
                    beatae quam molestias blanditiis, incidunt nostrum assumenda cupiditate. Maxime ipsum error voluptate
                    culpa
                    aperiam recusandae.
                </p>
            </div>
            <div class="image">
                <img src="{{ Vite::asset('resources/img/adv.jpg') }}" alt="">
            </div>
        </div>
    </main>
@endsection
