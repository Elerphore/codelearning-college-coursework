<head>
    <title>{{ $task['name'] }}</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<h1>{{ $task['name'] }}</h1>

<div class="task-block">

    <div class="task-block__item task-block__item_a">
        <div>
            <h1>Теория</h1>
            <p>{{ $task['theory'] }}</p>
        </div>
    </div>

    <div class="task-block__item task-block__item_b">
        <div>
            <h1>Задание</h1>
            <p>{{ $task['task'] }}</p>
        </div>
    </div>

    <div class="task-block__item task-block__item_c answer_input">
        <form action="" method="post">

            <label class="label">
                <input type="file" required/>
                <p>Загрузить работу</p>
            </label>

            <label class="label">
                <input class="answer_input_button" type="submit" value="Сохранить"/>
                <p>Отправить</p>
            </label>

            <label class="label">
                <a href="/" class="answer_input_button" />
                <p>На главную</p>
            </label>

        </form>
    </div>

</div>
