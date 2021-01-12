@extends('layouts.app')

@section('title-of-site')MegapolisTK @endsection

@section('content')




    <section class="slider">
        <div class="arrow-left" id="slLeft">
            <img src="{{asset('public/pictures/icons/play-button.svg')}}" alt="slider-arrow"/>
        </div>
        <div class="slick-slider">
            @foreach($slides as $el)
                <div class="slide">
                    <img data-lazy="{{asset("public/".$el->photo)}}" alt="slider-pictures">
                </div>
            @endforeach
        </div>
        <div class="arrow-right" id="slRight">
            <img src="{{asset('public/pictures/icons/play-button.svg')}}" alt="slider-arrow"/>
        </div>
    </section>


    <section class="catalog">

        <div class="catalog-title">
            <h2>Наша продукция</h2>
        </div>

        <div class="catalog-wrapper">
            <div class="catalog-head">
                <div class="name-of-product">
                    <h3> Бульдорс </h3>
                </div>
            </div>
            <div class="slider-wrapper">
                <div class="left-arrow bul-prev">
                    <img src="{{asset('public/pictures/icons/play-button.svg')}}" alt="slider-arrow"/>
                </div>
                <div class="catalog-content" id="bul-slider">
                    @foreach($doors as $el)
                        @if($el->company === 'Buldoors')
                            <div class="slide">
                                <div class="product">
                                    <p class="product-name">{{$el->name}}</p>
                                    <div class="product-img">
                                        <img data-lazy="{{asset("public/".$el->photo)}}" alt="door">
                                    </div>
                                    <p class="product-price">{{$el->price}} сум</p>
                                    <a class="product-btn" id="btn"
                                       href="{{route('one-door', [$el->company,$el->id])}}">Подробнее</a>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
                <div class="right-arrow bul-next">
                    <img src="{{asset('public/pictures/icons/play-button.svg')}}" alt="slider-arrow"/>
                </div>
            </div>
        </div>
        <div class="catalog-wrapper">
            <div class="catalog-head">
                <div class="name-of-product">
                    <h3>Гардиан</h3>
                </div>
            </div>
            <div class="slider-wrapper">
                <div class="left-arrow gard-prev">
                    <img src="{{asset('public/pictures/icons/play-button.svg')}}" alt="slider-arrow"/>
                </div>
                <div class="catalog-content" id="gar-slider">
                    @foreach($doors as $el)
                        @if($el->company === 'Gardian')
                            <div class="slide">
                                <div class="product">
                                    <p class="product-name">{{$el->name}}</p>
                                    <div class="product-img">
                                        <img data-lazy="{{asset("public/".$el->photo)}}" alt="door">
                                    </div>
                                    @if($el->price == 0)
                                        <p class="product-price">В зависимости от комплектации</p>
                                    @else
                                        <p class="product-price">{{$el->price}} сум</p>
                                    @endif
                                    <a class="product-btn" id="btn"
                                       href="{{route('one-door', [$el->company,$el->id])}}">Подробнее</a>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
                <div class="right-arrow gard-next">
                    <img src="{{asset('public/pictures/icons/play-button.svg')}}" alt="slider-arrow"/>
                </div>
            </div>
        </div>
        <div class="catalog-wrapper">
            <div class="catalog-head">
                <div class="name-of-product">
                    <h3>Dara</h3>
                </div>
            </div>
            <div class="slider-wrapper">
                <div class="left-arrow dar-prev">
                    <img src="{{asset('public/pictures/icons/play-button.svg')}}" alt="slider-arrow"/>
                </div>
                <div class="catalog-content" id="dar-slider">
                    @foreach($doors as $el)
                        @if($el->company === 'Dara')
                            <div class="slide">
                                <div class="product">
                                    <p class="product-name">{{$el->name}}</p>
                                    <div class="product-img">
                                        <img data-lazy="{{asset("public/".$el->photo)}}" alt="door">
                                    </div>
                                    <p class="product-price">{{$el->price}} сум</p>
                                    <a class="product-btn" id="btn"
                                       href="{{route('one-door', [$el->company,$el->id])}}">Подробнее</a>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
                <div class="right-arrow dar-next">
                    <img src="{{asset('public/pictures/icons/play-button.svg')}}" alt="slider-arrow"/>
                </div>
            </div>
        </div>


        <div class="catalog-wrapper">
            <div class="catalog-head">
                <div class="name-of-product">
                    <h3>Мебель</h3>
                </div>
            </div>
            @if(count($mebel) < 5)
                <h2 style="color: #930625">Скоро на нашем сайте будет доступна мебель</h2>
            @else
                <div class="slider-wrapper">
                    <div class="left-arrow well-prev">
                        <img src="{{asset('public/pictures/icons/play-button.svg')}}" alt="slider-arrow"/>
                    </div>
                    <div class="catalog-content" id="well-slider">
                        @foreach($mebel as $el)
                            <div class="slide">
                                <div class="product">
                                    <p class="product-name">{{$el->name}}</p>
                                    <div class="product-img">
                                        <img data-lazy="{{asset("public/".$el->photo)}}" alt="door">
                                    </div>
                                    <p class="product-price">{{$el->price}} сум</p>
                                    <a class="product-btn" id="btn"
                                       href="{{route('one-door', [$el->category,$el->id])}}">Подробнее</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="right-arrow well-next">
                        <img src="{{asset('public/pictures/icons/play-button.svg')}}" alt="slider-arrow"/>
                    </div>
                </div>
            @endif
        </div>

        <div class="catalog-wrapper">
            <div class="catalog-head">
                <div class="name-of-product">
                    <h3>Камины</h3>
                </div>
            </div>
            @if(count($fireplace) < 5)
                <h2 style="color: #930625">Скоро на нашем сайте будут доступны камины</h2>
            @else
                <div class="slider-wrapper">
                    <div class="left-arrow fire-prev">
                        <img src="{{asset('public/pictures/icons/play-button.svg')}}" alt="slider-arrow"/>
                    </div>
                    <div class="catalog-content" id="fire-slider">
                        @foreach($fireplace as $el)
                            <div class="slide">
                                <div class="product">
                                    <p class="product-name">{{$el->name}}</p>
                                    <div class="product-img">
                                        <img data-lazy="{{asset("public/".$el->photo)}}" alt="door">
                                    </div>
                                    <p class="product-price">{{$el->price}} сум</p>
                                    <a class="product-btn" id="btn"
                                       href="{{route('one-door', [$el->category,$el->id])}}">Подробнее</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="right-arrow fire-next">
                        <img src="{{asset('public/pictures/icons/play-button.svg')}}" alt="slider-arrow"/>
                    </div>
                </div>
            @endif
        </div>

    </section>


    <section class="prei">

        <div class="p-wrapper">
            <div class="p-block">
                <div class="icon">
                    <img src="{{asset('public/pictures/preim/eye.svg')}}">
                </div>
                <div class="text">
                    <p>Светлый и просторный шоурум</p>
                </div>
            </div>

            <div class="p-block">
                <div class="icon">
                    <img src="{{asset('public/pictures/preim/box.svg')}}">
                </div>
                <div class="text">
                    <p>Широкий спектр товаров для дома </p>
                </div>
            </div>

            <div class="p-block">
                <div class="icon">
                    <img src="{{asset('public/pictures/preim/top-three.svg')}}">
                </div>
                <div class="text">
                    <p>Продукция ведущих производителей </p>
                </div>
            </div>

            <div class="p-block">
                <div class="icon">
                    <img src="{{asset('public/pictures/preim/size.svg')}}">
                </div>
                <div class="text">
                    <p>Нестандартные размеры дверей на заказ </p>
                </div>
            </div>

            <div class="p-block">
                <div class="icon">
                    <img src="{{asset('public/pictures/preim/relations.svg')}}">
                </div>
                <div class="text">
                    <p>Отличное соотношение цены и качества </p>
                </div>
            </div>

            <div class="p-block">
                <div class="icon">
                    <img src="{{asset('public/pictures/preim/price-tag.svg')}}">
                </div>
                <div class="text">
                    <p>Широкий диапазон цен </p>
                </div>
            </div>

            <div class="p-block">
                <div class="icon">
                    <img src="{{asset('public/pictures/preim/shield.svg')}}">
                </div>
                <div class="text">
                    <p>Гарантия на продукцию</p>
                </div>
            </div>

            <div class="p-block">
                <div class="icon">
                    <img src="{{asset('public/pictures/preim/measuring-tape.svg')}}">
                </div>
                <div class="text">
                    <p>Бесплатный замер дверного проёма</p>
                </div>
            </div>

            <div class="p-block">
                <div class="icon">
                    <img src="{{asset('public/pictures/preim/shipped.svg')}}">
                </div>
                <div class="text">
                    <p>Бесплатная доставка дверей до подъезда</p>
                </div>
            </div>

            <div class="p-block">
                <div class="icon">
                    <img src="{{asset('public/pictures/preim/settings.svg')}}">
                </div>
                <div class="text">
                    <p>Профессиональная установка за отдельную плату </p>
                </div>
            </div>

        </div>

    </section>

    <section class="yandex-map">
        <div class="map-text">
            <p class="text-head">Где нас найти?</p>
        </div>
        <div class="map-wrapper">
            <iframe
                src="https://yandex.ru/map-widget/v1/?um=constructor%3Aa3b703eb90c5e78d553df48923079d8579f95d80686f219e4a8f493c09512a4d&amp;source=constructor"
                width="80%" height="350" frameborder="0"></iframe>
        </div>
    </section>

@endsection
