@extends('layout')

@section('title')
Главная
@endsection

@section('main_content')

<h1>Пользователи:</h1>
@foreach($users as $user)
    <div>
        <h3>{{$user->name1}}</h3><br>
    </div>
@endforeach


@endsection