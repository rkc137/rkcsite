
@extends('layout')

@section('main_content')

    <h2>Авторизация</h2>
    
    <form method="POST" action="/login">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="email">мыло:</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="имя@мыло.com">
        </div>

        <div class="form-group">
            <label for="password">пароль:</label>
            <input type="password" class="form-control" id="password" name="password">
        </div><br>

        <div class="form-group">
            <button style="cursor:pointer" type="submit" class="btn btn-primary">Войти</button>
        </div>
    </form>

@endsection