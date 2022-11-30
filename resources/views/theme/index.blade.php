@extends('layouts/main')

@section('content')
<div class="mb-4">
    <h1>{{ $themes['name'] }} : {{ $themes['text'] }}</h1>
</div>

<div class="theme-container">
    @foreach ($themes->tasks as $task)
        <a href="{{ "/theme/task/theory/$task[id]" }}" class="{{ Auth::user()->task_id == $task['id'] ? '' : 'unavailable' }}">
            <div class="theme-container__item {{ Auth::user()->task_id == $task['id'] ? '' : 'theme-container__item_disabled' }}">
                <div class="theme-container__item_desc">
                    <p>{{ $task->name }}</p>
                </div>
            </div>
        </a>
    @endforeach
</div>
@endsection
