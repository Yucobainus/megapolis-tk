@extends('layouts.app')


@section('title-of-site')Контакты@endsection

@section('content')

<section class="contact">

    <div class="wrapper">
        <div class="title">
            <h2>Наши Контакты</h2>
        </div>
        <hr>
        <div class="contact-part">

            <div class="left-con">

                <div class="numbers">
                    <div class="numbers-block">
                        <div><img src="{{asset('public/pictures/icons/phone.svg')}}" alt="phone"></div>
                        <div class="phone"> <a href="tel:+998977679050">+998977679050</a>
                        </div>
                    </div>
                    <div class="numbers-block">
                        <div><img src="{{asset('public/pictures/icons/phone.svg')}}" alt="phone"></div>
                        <div class="phone"><a href="tel:+998903749050">+998903749050</a></div>
                    </div>
                </div>

                <div class="social">
                    <div class="social-block">
                        <img src="{{asset('public/pictures/icons/facebook.svg')}}" alt="icon">
                        <a href="https://www.facebook.com/Megapolis.Uzbekistan">Facebook</a>
                    </div>
                    <div class="social-block">
                        <img src="{{asset('public/pictures/icons/instagram.svg')}}" alt="icon">
                        <a href="https://instagram.com/megapolis_home.uz">Instagram</a>
                    </div>
                    <div class="social-block">
                        <img src="{{asset('public/pictures/icons/telegram.svg')}}" alt="icon">
                        <a href="https://t.me/megapolis_home">Telegram</a>
                    </div>
                </div>
            </div>
            <div class="map">
                <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Aa3b703eb90c5e78d553df48923079d8579f95d80686f219e4a8f493c09512a4d&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe>
            </div>
        </div>
        <hr>
        <div class="title">
            <h2> Обратная связь </h2>
        </div>
        @if($errors->any())
        <div>
            <ul>
                @foreach($errors->all() as $err)
                <li>{{$err}}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <div class="form-part">
            <form action="{{route('contact-form')}}" method="post">
                @csrf
                <label for="name">
                    <p>Ваше имя</p>
                </label>
                <input type="text" name="name" placeholder="Введите имя" id="name">
                <label for="phone">
                    <p>Ваш телефон</p>
                </label>
                <input type="text" name="phone" placeholder="Введите ваш телефон" id="phone">
                <label for="subject">
                    <p>Ваш вопрос</p>
                </label>
                <textarea type="text" name="subject" id="subject" placeholder="Ваш вопрос" class="question"></textarea>
                <input type="submit" class="btn" value="Отправить">
            </form>
        </div>
    </div>


</section>


@endsection
