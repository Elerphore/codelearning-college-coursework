@include('navbar/index')
@include('sidebar/sidebar')


<div>
    <h1>Список выполненных заданий</h1>
    <div class="mt-4">
    @forelse ($responses as $response)
        <ul class="list-group">
            <li class="list-group-item">
                <p>Пользователь {{ $response->user->name }}</p>
                <p>Имя папки {{ $response->name }}</p>
                <p>Выполненное задание {{ $response->task->name }}</p>

                <div>
                    <button class="btn btn-primary">Скачать</button>
                </div>
            </li>
        </ul>
    @empty
        <p>Никто ещё не выложил задания</p>
   @endforelse
    </div>
</div>
