@extends('layout')

@section('title')
create
@endsection

@section('main_content')

    <h2>Регистрация</h2>
    <form method="POST" action="/register">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="name">Имя:</label>
            <input type="text" class="form-control" id="name1" name="name1">
        </div>

        <div class="form-group">
            <label for="name">Фамилия:</label>
            <input type="text" class="form-control" id="name2" name="name2">
        </div>

        <div class="form-group">
            <label for="name">Отчество:</label>
            <input type="text" class="form-control" id="name3" name="name3">
        </div>

        <div class="form-group">
            <label for="name">Паспортные данные:</label>
            <input type="text" class="form-control" id="passport" name="passport">
        </div>

        <div class="form-group">
            <label for="name">Анкета:</label>
            <input type="text" class="form-control" id="form" name="form">
        </div>

        <div class="form-group">
            <label for="email">Мыло:</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>

        <div class="form-group">
            <label for="password">Пароль:</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>

        <div class="form-group">
            <label for="password_confirmation">Подтверждение пароля:</label>
            <input type="password" class="form-control" id="password_confirmation"
                   name="password_confirmation">
        </div><br>

        <div class="form-group">
            <button style="cursor:pointer" type="submit" class="btn btn-primary">Отправить</button>
        </div>
    </form>

@endsection 
 
 
