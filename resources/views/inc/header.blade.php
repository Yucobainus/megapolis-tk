@section('header')


        <header>
            <div class="header-up">
                <a href="{{route('home')}}" class="logo"><img src="{{asset('public/pictures/logo.svg')}}" alt="logo"></a>
                <a href="{{route('enterDoors')}}">Входные двери</a>
                <a href="{{route('roomDoors')}}">Межкомнатные двери</a>
                <a href="{{route('furniture')}}">Мебель</a>
                <a href="{{route('fireplace')}}">Камины</a>
                <div class="number">
                    <a href="tel:+998977679050">+998977679050</a>
                    <a href="tel:+998903749050">+998903749050</a>

                </div>
            </div>
            <div class="header-down">
                <ul>
                    <li class="up-li"><a href="{{route('about')}}">О нас</a></li>
                    <li class="up-li"><a href="{{route('production')}}">Продукция</a></li>
                    <li class="up-li"><a href="{{route('partners')}}">Партнёры</a></li>
                    <li class="up-li"><a href="{{route('contact')}}">Контакты</a></li>
                    <li class="up-li"><a href="{{route('delivery')}}">Доставка и установка</a></li>
                </ul>
            </div>
        </header>

        <div id="menu-toggle">
            <div id="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div id="cross">
                <span></span>
                <span></span>
            </div>
        </div>

        <nav class="nav">
            <div class="nav-list">

                <div class="img">
                    <a href="{{route('home')}}"><img src="{{asset('public/pictures/logo.svg')}}" alt="logo"></a>
                </div>

                <a href="{{route('enterDoors')}}">Входные двери</a>
                <a href="{{route('roomDoors')}}">Межкомнатные двери</a>
                <a href="{{route('furniture')}}">Мебель</a>
                <a href="{{route('fireplace')}}">Камины</a>
                <hr>
                <a href="{{route('about')}}">О нас</a>
                <a href="{{route('production')}}">Продукция</a>
                <a href="{{route('partners')}}">Партнёры</a>
                <a href="{{route('contact')}}">Контакты</a>
                <a>Доставка и установка</a>
            </div>

        </nav>


