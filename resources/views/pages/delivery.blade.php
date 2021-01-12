@extends('layouts.app')

@section('title-of-site')Доставка@endsection

@section('content')

    <div class="delivery-wrapper">
        <div class="del-block">
            <div class="del-name">
                <h2>Замер</h2>
            </div>
            <div class="del-pic">
                <img src="{{asset('public/pictures/delivery/roulette.svg')}}"/>
            </div>
            <div class="del-option">
                <p>Бесплатно</p>
            </div>
        </div>
        <div class="del-block">
            <div class="del-name">
                <h2>Доставка до подъезда</h2>
            </div>
            <div class="del-pic">
                <img src="{{asset('public/pictures/delivery/entrance.svg')}}"/>
            </div>
            <div class="del-option">
                <p>Бесплатно</p>
            </div>
        </div>
        <div class="del-block">
            <div class="del-name">
                <h2>Подъем на этаж</h2>
            </div>
            <div class="del-pic">
                <img src="{{asset('public/pictures/delivery/stairs.svg')}}"/>
            </div>
            <div class="del-option">
                <p>до 3 этажа - бесплатно<br>
                Свыше 3 этажа - {{$prices->priceStair}} сум</p>
            </div>
        </div>
        <div class="del-block">
            <div class="del-name">
                <h2>Демонтаж + установка входной двери</h2>
            </div>
            <div class="del-pic">
                <img src="{{asset('public/pictures/delivery/maintenance.svg')}}"/>
            </div>
            <div class="del-option">
                <p>{{$prices->price}} сум</p>
            </div>
        </div>
        <div class="del-block">
            <div class="del-name">
                <h2>Демонтаж + установка входной двери с мдф отделкой</h2>
            </div>
            <div class="del-pic">
                <img src="{{asset('public/pictures/delivery/server.svg')}}"/>
            </div>
            <div class="del-option">
                <p>{{$prices->priceWithD}} сум</p>
            </div>
        </div>
        <div class="del-block">
            <div class="del-name">
                <h2>Доп. работа ( слом входного проема итп)</h2>
            </div>
            <div class="del-pic">
                <img src="{{asset('public/pictures/delivery/payment.svg')}}"/>
            </div>
            <div class="del-option">
                <p>На договорной основе</p>
            </div>
        </div>
    </div>

@endsection
