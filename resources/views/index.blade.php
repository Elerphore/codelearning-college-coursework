@extends('layouts/main')

@section('content')
<head>
    <title>Course Selection</title>
</head>

@if (Route::has('login'))
    @auth
        <h1>Добро пожаловать {{ Auth::user()->name  }}</h1>
    @else
        <div class="introduction-block">
            <h1 class="introduction-block__title">Добро пожаловать на Code Learning!</h1>
            <p class="introduction-block__description">Сайт для изучения программирования!</p>
        </div>
    @endauth
@endif
@endsection
