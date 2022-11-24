<head>
    <title>Course Selection</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

@include('navbar/index')
@include('sidebar/sidebar')

<h1 class="mb-4">Выберите курс</h1>

<div class="theme-container">
    @foreach ($courses as $course)
        <a href="{{ "/theme/$course[id]" }}">
            <div class="theme-container__item">
                <div class="theme-container__item_desc">
                    <p>{{ $course['name'] }}</p>
                </div>
            </div>
        </a>
    @endforeach
</div>
