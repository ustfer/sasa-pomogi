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
                    <tr>
                        <th scope="row"></th>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </section>
    <section class="main_input">
        <div class="container">
            <form action="">
                <div class="form-group">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="10"></textarea>
                </div>
                <button type="submit" class="btn btn-primary mb-2">Добавить запись</button>
            </form>
        </div>
    </section>
</div>
@endsection
