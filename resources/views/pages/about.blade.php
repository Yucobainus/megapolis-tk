@extends('layouts.app')

@section('title-of-site')О нас@endsection

@section('content')

<section class="about">

    <div class="logo-photo">
        <img src="{{asset('public/pictures/logo.svg')}}">
    </div>

    <div class="text">
        <p>Megapolis - это магазин-шоурум, в котором вы можете найти широкий спектр товаров для дома. Мы поможем вам
            с обустройством вашего жилища от порога до зоны отдыха, ведь мы предлагаем вам:</p>
    </div>
    <div class="strengh">
        <div class="s-block">
            <div class="icon"> <a href="{{route('enterDoors')}}"> <img src="{{asset('public/pictures/icons/church-door.svg')}}" alt="icon"></a></div>
            <div class="s-text">
                <p>Входные двери</p>
            </div>
        </div>
        <div class="s-block">
            <div class="icon"> <a href="{{route('roomDoors')}}"> <img src="{{asset('public/pictures/icons/door.svg')}}" alt="icon"></a></div>
            <div class="s-text">
                <p>Межкомнатные <br>двери</p>
            </div>
        </div>
        <div class="s-block">
            <div class="icon"> <a href="{{route('fireplace')}}"> <img src="{{asset('public/pictures/icons/fireplace.svg')}}" alt="icon"></a></div>
            <div class="s-text">
                <p>Электрокамины</p>
            </div>
        </div>
        <div class="s-block">
            <div class="icon"> <a href="{{route('furniture')}}"> <img src="{{asset('public/pictures/icons/bed.svg')}}" alt="icon"> </a></div>
            <div class="s-text">
                <p>Мебель</p>
            </div>
        </div>
    </div>

    <hr>

    <div class="text">
        <p>Одной из наших приоритетных задач является создание уюта и комфорта в вашем доме. Также мы считаем что
            комфорт - это прежде всего безопасность и уверенность в завтрашнем дне, поэтому мы предлагаем вам
            продукцию высочайшего качества. На многие единицы нашей продукции действует гарантия. </p>
    </div>

    <hr>

    <div class="title">
        <h2> Наши партнёры </h2>
    </div>


    <div class="partner-slider">
        <div class="slide">
            <div class="logo"><img src="{{asset('public/pictures/partners/buldoors.png')}}" alt=""></div>
        </div>
        <div class="slide">
            <div class="logo"><img src="{{asset('public/pictures/partners/dara.jpg')}}" alt=""></div>
        </div>
        <div class="slide">
            <div class="logo"><img src="{{asset('public/pictures/partners/dimplex.jpg')}}" alt=""></div>
        </div>
        <div class="slide">
            <div class="logo"><img src="{{asset('public/pictures/partners/gardian.jpg')}}" alt=""></div>
        </div>
        <div class="slide">
            <div class="logo"><img src="{{asset('public/pictures/partners/modulemebel.jpg')}}" alt=""></div>
        </div>
        <div class="slide">
            <div class="logo"><img src="{{asset('public/pictures/partners/profildoors.jpg')}}" alt=""></div>
        </div>
        <div class="slide">
            <div class="logo"><img src="{{asset('public/pictures/partners/wellwood.png')}}" alt=""></div>
        </div>
    </div>

</section>
@endsection
