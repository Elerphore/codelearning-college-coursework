<head>
    <title>Course Selection</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

@if (Route::has('login'))
    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
        @auth
            <p class="text-sm text-gray-700 dark:text-gray-500 underline">Добро пожаловать {{ Auth::user()->name  }}</p>

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <a class="text-sm text-gray-700 dark:text-gray-500 underline"
                    href="{{ route('logout')  }}"
                    onclick="event.preventDefault(); this.closest('form').submit();">
                    {{ __('Выйти') }}
                </a>
            </form>
        @else
            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Войти</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Регистрация</a>
            @endif
        @endauth
    </div>
@endif

<h1>Выберите курс</h1>

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
