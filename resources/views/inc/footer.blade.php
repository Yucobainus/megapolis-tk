@section('footer')
<footer>
    <div class="footer-wrapper">

        <div class="contact">
            <div class="a">
                <a href="tel:+998977679050">+998977679050</a>
                <a href="tel:+998903749050">+998903749050</a>
            </div>
            <div class="b">
                <a href="https://www.facebook.com/Megapolis.Uzbekistan"> <img src="{{asset('public/pictures/icons/facebook.svg')}}" alt="facebook"></a>
                <a href="https://instagram.com/megapolis_home.uz"> <img src="{{asset('public/pictures/icons/instagram.svg')}}" alt="instagram"></a>
                <a href="https://t.me/megapolis_home"> <img src="{{asset('public/pictures/icons/telegram.svg')}}" alt="instagram"></a>
            </div>
        </div>
        <div class="logo-part">
            <img src="{{asset('public/pictures/logo.svg')}}" alt="logo">
        </div>
        <div class="site-map">
            <div class="links">
                <p>О нас</p>
                <a href="{{route('about')}}">О нас</a>
                <a href="{{route('contact')}}">Контакты</a>
                <a href="{{route('partners')}}">Партнёры</a>
                <a href="{{route('delivery')}}">Доставка и установка</a>
            </div>
            <div class="links">
                <p>Категории</p>
                <a href="{{route('enterDoors')}}">Входные двери</a>
                <a href="{{route('roomDoors')}}">Межкомнатные двери</a>
                <a href="{{route('furniture')}}">Мебель</a>
                <a href="{{route('fireplace')}}">Камины</a>
            </div>
        </div>
    </div>
</footer>
