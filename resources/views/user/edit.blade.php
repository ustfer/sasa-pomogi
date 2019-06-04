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
<section class="container">
    <form action="{{route('user.update', ['user' => $user])}}" method="POST">
        @method('PUT')
        @csrf
        <table class="table justify-content-center">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Введите данные врача</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">ФИО
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">

                            </div>
                            <input type="text" class="form-control" placeholder="ФИО Врача"
                                aria-label="Имя пользователя" aria-describedby="basic-addon1" name="name"
                                value="{{$user->name}}">
                        </div>
                    </th>
                </tr>
                <tr>
                    <th scope="row">Должность
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">

                            </div>
                            <input type="text" class="form-control" name="position" placeholder="Должность"
                                aria-label="Имя пользователя" aria-describedby="basic-addon1"
                                value="{{$user->position}}">
                        </div>
                    </th>

                </tr>
                {{-- <tr>
                <th scope="row">Рабочие дни
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">

                        </div>
                        <input type="text" class="form-control" placeholder="Рабочие дни" aria-label="Имя пользователя"
                            aria-describedby="basic-addon1">
                    </div>
                </th>

            </tr> --}}
                <tr>
                    <th scope="row">Телефон
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">

                            </div>
                            <input type="text" class="form-control" placeholder="Телефон" aria-label="Имя пользователя"
                                aria-describedby="basic-addon1" name="phone" value="{{$user->phone}}">
                        </div>
                    </th>

                </tr>
                <tr>
                    <th scope="row">E-mail
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">

                            </div>
                            <input type="text" class="form-control" placeholder="E-mail" aria-label="Имя пользователя"
                                aria-describedby="basic-addon1" name="email" value="{{$user->email}}">
                        </div>
                    </th>

                </tr>
                <tr>
                    <th scope="row">Описание
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">

                            </div>
                            <input type="text" class="form-control" placeholder="Описание" aria-label="Имя пользователя"
                                aria-describedby="basic-addon1" name="bio" value="{{$user->bio}}">
                        </div>
                    </th>

                </tr>
                <tr>
                    <th scope="row">Фото врача
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">

                            </div>
                            <input type="text" class="form-control" placeholder="Фото врача" name="avatar"
                                aria-label="Имя пользователя" aria-describedby="basic-addon1">
                        </div>
                    </th>

                </tr>
                {{-- <tr>
                    <th scope="row">Фото врача
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">

                            </div>
                            <input type="file" class="form-control" placeholder="Фото врача" name="avatar"
                                aria-label="Имя пользователя" aria-describedby="basic-addon1">
                        </div>
                    </th>

                </tr> --}}
            </tbody>
        </table>
        <button type="submit" class="btn btn-primary">Добавить Врача</button>
    </form>
</section>
@endsection
