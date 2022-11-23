<head>
    <title>Course Selection</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script defer src="{{ asset('js/app.js') }}"></script>
</head>

@if (Route::has('login'))
    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
        @auth
            <div class="flex gap-2">
                <p
                    class="btn btn-primary mr-2"
                    data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasExample"
                    aria-controls="offcanvasExample"
                >Меню
                </p>

                <p class="btn btn-primary text-sm text-gray-700 dark:text-gray-500 underline">Добро пожаловать {{ Auth::user()->name  }}</p>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a class="btn btn-primary text-sm text-gray-700 dark:text-gray-500 underline"
                       href="{{ route('logout')  }}"
                       onclick="event.preventDefault(); this.closest('form').submit();">
                        {{ __('Выйти') }}
                    </a>
                </form>

            </div>
        @else
            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Войти</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Регистрация</a>
            @endif
        @endauth
    </div>
@endif

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

@include('sidebar/sidebar')
