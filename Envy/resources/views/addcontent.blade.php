@extends('app')

@section('content')

    <!DOCTYPE html>
<html xmlns:th="http://www.thymeleaf.org">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../../public/css/app.css">
    <title> Подача идеи </title>
    <link rel="icon" href="img/favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maxim-scale=1.0, user-scalable=0 /">
</head>
<body>
@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="/add" method="post">
    @csrf
    <div class="form-group">
        <label for="author">Автор</label>
        <input required name="author" placeholder="Автор сообщения" id="author" class="form-control ">
    </div>

    <div class="form-group">
        <label for="theme">Тема</label>
        <input required pattern=".{5,45}"  required name="text" placeholder="Тема сообщения" id="theme" class="form-control ">
    </div>

    <div class="form-group">
        <label for="teg">Тег</label>
        <input required pattern=".{5,45}" required name="text" placeholder="Придумайте тег для сообщения" id="teg" class="form-control">
    </div>
    <div class="form-group">
        <label for="fullText">Сообщение</label>
        <textarea  required name="fullText" placeholder="Текст сообщения" id="fullText" class="form-control"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Готово!</button>
</form>
</body>
</html>

@endsection
