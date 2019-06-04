@extends('layouts.app')

@section('navbar-auth')
<li class="nav-item">
    <a class="nav-link" href="{{ route('user.show', ['user' => $user->id]) }}">Профиль</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{ route('user.evernote', ['user' => $user->id]) }}">Ежедневник</a>
</li>
@endsection

@section('content')
<div class="container py-5">
    <section class="main_table mt-5">
        <div class="container">
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col col-md-3">Время</th>
                        <th scope="col">Описание</th>
                        <th scope="col">Дата</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($user->calendar as $item)
                    <tr>
                        <th scope="row"></th>
                        <td>{{$item->task}}</td>
                        <td></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
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
                    <label for="example-datetime-local-input" class="col-2 col-form-label">startet at</label>
                    <div class="col-10">
                        <input class="form-control" type="date" value="2011-08-19T13:45:00"
                            id="example-datetime-local-input" name="started_on">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-datetime-local-input" class="col-2 col-form-label">ended at</label>
                    <div class="col-10">
                        <input class="form-control" type="date" value="2011-08-19T13:45:00"
                            id="example-datetime-local-input" name="ended_on">
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
