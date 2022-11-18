<head>
    <title>Theme Selection</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<div>
    <h1>{{ $themes['name'] }} : {{ $themes['text'] }}</h1>
</div>

<div class="theme-container">
    @foreach ($themes->tasks as $task)
        <a href="{{ "/theme/task/$task[id]" }}">
            <div class="theme-container__item">
                <div class="theme-container__item_desc">
                    <p>{{ $task['name'] }}</p>
                </div>
            </div>
        </a>
    @endforeach
</div>
