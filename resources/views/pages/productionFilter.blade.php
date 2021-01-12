@extends('layouts.app')

@section('title-of-site')Наша продукция@endsection

@section('content')

<section class="production">

    <div class="prod-wrapper">
        <div class="type-title">
            <h2>Наша продукция</h2>
        </div>
        <div class="prod-options">
            <form action="{{route('production-filter')}}" method="post">
                @csrf

                <div class="o-block">

                    <p>Выберите компанию</p>
                    <select name="company">
                        <option>Все</option>
                        <option>Бульдорс</option>
                        <option>Гардиан</option>
                        <option>Dara</option>
                        <option>Мебель</option>
                        <option>Камины</option>
                    </select>

                </div>

                <div class="o-block">

                    <p>Выберите категорию</p>
                    <select name="category">
                        <option>Все</option>
                        <option>Межкомнатные двери</option>
                        <option>Входные двери</option>
                    </select>

                </div>


                <div class="o-block">

                    <p>Ценовой диапазон:</p>

                    <input type="number" name="from" placeholder="От" id="from">


                    <input type="number" name="to" placeholder="До" id="to">

                </div>

                <div class="o-block">

                    <input type="submit" value="Применить" class="submit">

                </div>

            </form>
        </div>
        <div class="prod-row">

            <div class="prod-line">
                @foreach($data as $el)
                @if($el->company === 'Dara')
                <div class="product">
                    <p class="product-name">{{$el->name}}</p>
                    <div class="product-img">
                        <img data-src="{{asset("public/".$el->photo)}}" alt="door">
                    </div>
                    <p class="product-price">{{$el->price}} сум</p>
                    <a class="product-btn" id="btn" href="{{route('one-door', [$el->company,$el->id])}}">Подробнее</a>
                </div>
                @endif
                @if($el->company === 'Buldoors')
                <div class="product">
                    <p class="product-name">{{$el->name}}</p>
                    <div class="product-img">
                        <img data-src="{{asset("public/".$el->photo)}}" alt="door">
                    </div>
                    <p class="product-price">{{$el->price}} сум</p>
                    <a class="product-btn" id="btn" href="{{route('one-door', [$el->company,$el->id])}}">Подробнее</a>
                </div>
                @endif
                @if($el->company === 'Gardian')
                <div class="product">
                    <p class="product-name">{{$el->name}}</p>
                    <div class="product-img">
                        <img data-src="{{asset("public/".$el->photo)}}" alt="door">
                    </div>
                    @if($el->price == 0)
                    <p class="product-price">
                        В зависимости от комплектации
                    </p>
                    @else
                    <p class="product-price">
                        {{$el->price}} сум
                    </p>
                    @endif

                    <a class="product-btn" id="btn" href="{{route('one-door', [$el->company,$el->id])}}">Подробнее</a>
                </div>
                @endif
                @if($el->category == 'furniture')
                <div class="product">
                    <p class="product-name">{{$el->name}}</p>
                    <div class="product-img">
                        <img data-src="{{asset("public/".$el->photo)}}" alt="door">
                    </div>
                    <p class="product-price">{{$el->price}} сум</p>
                    <a class="product-btn" id="btn" href="{{route('one-door', [$el->category,$el->id])}}">Подробнее</a>
                </div>
                @endif
                @if($el->category == 'fireplace')
                <div class="product">
                    <p class="product-name">{{$el->name}}</p>
                    <div class="product-img">
                        <img data-src="{{asset("public/".$el->photo)}}" alt="door">
                    </div>
                    <p class="product-price">{{$el->price}} сум</p>
                    <a class="product-btn" id="btn" href="{{route('one-door', [$el->category,$el->id])}}">Подробнее</a>
                </div>
                @endif
                @endforeach
            </div>
        </div>
        @endsection
