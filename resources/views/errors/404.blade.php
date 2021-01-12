<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/css/main.css') }}">
<body>
<div class="error-page">
    <div class="error-logo">
        <a href="{{route('home')}}" class="logo"><img src="{{asset('/pictures/logo.svg')}}" alt="logo"></a>
    </div>
    <div class="error-content">
        <h2>Такой страницы не существует</h2>
        <a href="{{route('home')}}">Главная</a>
        <a href="{{route('enterDoors')}}">Входные двери</a>
        <a href="{{route('roomDoors')}}">Межкомнатные двери</a>
        <a href="{{route('furniture')}}">Мебель</a>
        <a href="{{route('fireplace')}}">Камины</a>
    </div>
</div>
</body>



