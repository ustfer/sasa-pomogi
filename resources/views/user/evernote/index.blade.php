@extends('layouts.app')

@section('navbar-auth')
<li class="nav-item">
    <a class="nav-link" href="{{ route('user.show', ['user' => $user->id]) }}">Профиль</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{ route('user.evernote', ['user' => $user->id]) }}">Ежедневник</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{ route('user.calendar', ['user' => $user->id]) }}">Календарь</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{ route('user.edit', ['user' => $user->id]) }}">Обновить профиль</a>
</li>
@endsection

@section('content')
<div class="container py-5">
    <section class="main_table mt-5">
        <div class="container">
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col col-md-3">Дата</th>
                        <th scope="col">Описание</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($user->calendar as $item)
                    <tr>
                        <th scope="row">{{$item->created_at}}</th>
                        <td>{{$item->task}}</td>
                        <td>
                            <button class="btn btn-primary"  onclick="deleteItem({{$item->id}})">Удалить</button>
                            {{-- <a role="button" class="btn btn-primary"  href="{{ route('user.evernote', ['user' => $user->id]) }}">Редактировать</a> --}}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <script>
            function deleteItem(id) {
                if (confirm("Удалить?")) {
                    axios.delete(`/evernote/${id}/delete`).then(document.location.reload())
                }
            }
            </script>
            {{-- <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav> --}}
        </div>
    </section>
    <section class="main_input">
        <div class="container">
            <form action="{{route('user.evernote.store', ['user' => $user])}}" method="POST">
                @csrf
                <div class="form-group row">
                    <label for="example-datetime-local-input" class="col-2 col-form-label">Начало задачи</label>
                    <div class="col-10">
                        <input class="form-control" type="date"
                            id="example-datetime-local-input" name="started_on">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-datetime-local-input" class="col-2 col-form-label">Конец задачи</label>
                    <div class="col-10">
                        <input class="form-control" type="date"
                            id="example-datetime-local-input" name="ended_on">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="color-input" class="col-2 col-form-label">Цвет задачи</label>
                    <div class="col-10">
                        <input class="form-control" type="color"
                            id="color-input" name="color" value="#1976d2">
                    </div>
                </div>
                <div class="form-group">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" name="task"></textarea>
                </div>
                <button type="submit" class="btn btn-primary mb-2">Добавить запись</button>
            </form>
        </div>
    </section>
</div>
@endsection
