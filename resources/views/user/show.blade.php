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
    <div class="row">
        <div class="col-md-2 offset-md-2">
            <img src="{{$user->avatar}}" alt="" class="img-fluid">
        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col">
                    <h3>{{$user->name}}</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-4">Должность</div>
                <div class="col-7">
                    <h5>{{$user->position}}</h5>
                </div>
            </div>
            <div class="row">
                <div class="col-4">Телефон</div>
                <div class="col-7">
                    <a href="tel:+">{{$user->phone}}</a>
                </div>
            </div>
            <div class="row">
                <div class="col-4">Почта</div>
                <div class="col-7">
                    <a href="mailto:{{$user->email}}">{{$user->email}}</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 offset-md-2 py-4">
            {!!$user->bio!!}
        </div>
    </div>
</div>
@endsection
