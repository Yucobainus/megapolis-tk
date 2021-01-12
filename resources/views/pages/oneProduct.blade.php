@extends('layouts.app')

@section('title-of-site'){{$data->name}}@endsection

@section('content')

<section class="one-product">

    <div class="product-info">

        <div class="pr-photo">

            @if($data->type === 'Межкомнатные двери')
            <img src="{{asset("public/".$data->photo)}}" class="room">
            @else
            <img src="{{asset("public/".$data->photo)}}">
            @endif
        </div>


        <div class="info-wrapper">
            <div class="pr-info">
                <h2>{{$data->name}}</h2>
                @if($data->company === 'Buldoors')
                <div class="info">
                    <div class="info-line">
                        <p>Цвет:</p>
                        <p>{{$data->color}}</p>
                    </div>
                    <div class="info-line">
                        <p>Размер:</p>
                        <p> {{$data->size}}</p>
                    </div>
                    <div class="info-line">
                        <p>Основной замок:</p>
                        <p> {{$data->mainLock}}</p>
                    </div>
                    <div class="info-line">
                        <p>Дополнительный замок:</p>
                        <p>{{$data->addLock}}</p>
                    </div>
                    <div class="info-line">

                        <p>Цилиндр:</p>
                        <p> {{$data->cilindr}}</p>
                    </div>
                    <div class="info-line">
                        <p>Задвижка:</p>
                        <p>{{$data->zadv}}</p>
                    </div>
                    <div class="info-line">
                        <p>Ручки:</p>
                        <p> {{$data->arm}}</p>
                    </div>
                    <div class="info-line">
                        <p>Глазок:</p>
                        <p> {{$data->glazok}}</p>
                    </div>
                    <div class="info-line">
                        <p>Отделка наружная:</p>
                        <p> {{$data->front}}</p>
                    </div>
                    <div class="info-line">
                        <p>Отделка внутренняя:</p>
                        <p> {{$data->back}}</p>
                    </div>
                    <p class="price">{{$data->price}} сум</p>
                </div>
                @endif
                @if($data->company === 'Dara')
                <div class="info">
                    <p>Полотно: {{$data->polotno}}</p>
                    <p>Стекло: {{$data->glass}}</p>
                    <p>Покрытие: {{$data->cover}}</p>
                    <p>Цвет: {{$data->color}}</p>
                    <p>Размеры: {{$data->size}}</p>
                    <p>Цена за полотно: {{$data->costForPolotno}}</p>
                    <p class="price">Цена за комплект: {{$data->price}} сум</p>
                </div>
                @endif
                @if($data->company === 'Gardian')
                <div class="info">
                    <p>Размер: {{$data->size}}</p>
                    <p>Характеристики: {{$data->character}}</p>
                    <p>Наполнение: {{$data->size}}</p>
                    <p>Внешняя отделка: {{$data->front}}</p>
                    <p>Внуренняя отделка: {{$data->back}}</p>
                    <p>Основной замок: {{$data->mainLock}}</p>
                    <p>Дополнительный замок: {{$data->addLock}}</p>
                    <p>Цилиндр: {{$data->cilindr}}</p>
                    <p>Ручки: {{$data->arm}}</p>
                    <p>Глазок: {{$data->glazok}}</p>
                    <p>* - {{$data->tipone}}</p>
                    <p>** - {{$data->tiptwo}}</p>
                    <p>*** - {{$data->tipthree}}</p>
                    @if($data->price == 0)
                    <p class="price"> Цена: В зависимости от комплектации</p>
                    @else
                    <p class="price">{{$data->price}} сум</p>
                    @endif
                </div>
                @endif
                @if($data->category === 'furniture')
                <div class="info">
                    <p>Название: {{$data->name}}</p>
                    <p class="price">{{$data->price}} сум</p>
                </div>
                @endif
                @if($data->category === 'fireplace')
                <div class="info">
                    <p><strong>Название:</strong> {{$data->name}}</p>
                    <p><strong>Портал:</strong> {{$data->portal}}</p>
                    <p><strong>Очаг:</strong> {{$data->ochag}}</p>
                    <p><strong>Цвет:</strong> {{$data->tech}}</p>
                    <p><strong>Габариты:</strong> {{$data->size}}</p>
                    <p class="price">{{$data->price}} сум</p>
                </div>
                @endif
                <div class="icons">
                    <div class="i-block">
                        <img src="{{asset('public/pictures/icons/truck.svg')}}" class="truck">
                        <p>Бесплатная доставка</p>
                    </div>
                    <div class="i-block">
                        <img src="{{asset('public/pictures/icons/fist.svg')}}">
                        <p>Установка за отдельную плату</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="buy">
        <div class="count">
            <p>Количество:</p>
            <p class="count-of-prod"><input type="number" value="1"></p>
        </div>
        <input type="submit" class="btn" value="В корзину" id="add-to-cart">
    </div>

    <div class="about">
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
    </div>
</section>

@endsection

@section('script')

    <script>
        $(document).ready(function () {
            $('#add-to-cart').click(function (event) {
                event.preventDefault()
                addToCart();
            })
        })

        function addToCart() {
            let count = $('.count-of-prod input').val()
            $.ajax({
                url: "{{route('add-to-cart')}}",
                type: "POST",
                data: {
                    "_token": "{{csrf_token()}}",
                    "id": {{$data->id}},
                    "photo": "public/{{$data->photo}}",
                    "name": "{{$data->name}}",
                    "price": {{$data->price}},
                    "company": "{{$data->company}}",
                    "count": count,
                },
                success: (data) => {
                    location.reload();
                },
                error: (err) => {
                    console.log(err);
                }
            })
        }
    </script>

@endsection
