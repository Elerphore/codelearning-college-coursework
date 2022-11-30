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
            <?php
            $themes = $course->theme;
            $tasksId = [];

            foreach ($themes as $theme) {
                foreach($theme->tasks as $task) {
                    array_push($tasksId, $task->id);
                }
            }

            ?>

        <a href="{{ "/theme/$course[id]" }}" class="{{ in_array(Auth::user()->task_id, $tasksId) ? '' : 'unavailable' }}">
            <div class="theme-container__item {{ in_array(Auth::user()->task_id, $tasksId) ? '' : 'theme-container__item_disabled' }}">
                <div class="theme-container__item_desc">
                    <p>{{ $course['name'] }}</p>
                </div>
            </div>
        </a>
    @endforeach
</div>
