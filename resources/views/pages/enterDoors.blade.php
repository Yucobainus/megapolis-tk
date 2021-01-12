@extends('layouts.app')

@section('title-of-site')Входные двери @endsection

@section('content')

    <section class="production">

        <div class="prod-wrapper">
            <div class="type-title">
                <h2>Входные двери</h2>
            </div>
            <div class="prod-options">
                <form action="{{route('enter-door-filter')}}" method="post">
                    @csrf
                    <div class="o-block">

                        <p>Выберите цвет</p>
                        <select name="color">
                            @foreach($colors as $color)
                                <option>{{$color}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="o-block">

                        <p>Выберите компанию</p>
                        <select name="company">
                            <option>Все</option>
                            <option>Бульдорс</option>
                            <option>Гардиан</option>
                            <option>Dara</option>
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
            @if(count($doors) === 0)

                <div class="not-found"><h2>По вашему запросу ничего не найдено</h2></div>

            @else
                <div class="prod-row">

                    <div class="prod-line">
                        @foreach($doors as $el)

                            @if($loop->index <= 4)
                                @if($el->company === 'Buldoors')
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
                                        <a class="product-btn" id="btn"
                                           href="{{route('one-door', [$el->company,$el->id])}}">Подробнее</a>
                                    </div>
                                @endif

                            @else


                                @if($el->company === 'Dara' || $el->company === 'Buldoors' || $el->company === 'Gardian')
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
                                        <a class="product-btn" id="btn"
                                           href="{{route('one-door', [$el->company,$el->id])}}">Подробнее</a>
                                    </div>
                                @endif

                            @endif
                        @endforeach

                    </div>
                    {!! $doors->render() !!}
                </div>
    @endif
@endsection
