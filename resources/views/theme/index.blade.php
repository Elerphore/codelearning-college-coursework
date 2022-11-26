@extends('layouts/main')

@section('content')
<div class="mb-4">
    <h1>{{ $themes['name'] }} : {{ $themes['text'] }}</h1>
</div>

<div class="theme-container">
    @foreach ($themes->tasks as $task)
        <a href="{{ "/theme/task/theory/$task[id]" }}">
            <div class="theme-container__item">
                <div class="theme-container__item_desc">
                    <p>{{ $task['name'] }}</p>
                </div>
            </div>
        </a>
    @endforeach
</div>
@endsection
