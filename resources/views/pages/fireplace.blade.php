@extends('layouts.app')

@section('title-of-site')Камины@endsection

@section('content')

    <section class="production">

        <div class="prod-wrapper">

            <div class="type-title">
                <h2>Камины</h2>
            </div>
            <div class="prod-options">
                <form action="{{route('fireplace-filter')}}" method="post">
                    @csrf

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
            @if(count($fire) === 0)
                <div class="not-found"><h2>Скоро на нашем сайте будут доступны камины</h2></div>
            @else
                <div class="prod-row">
                    <div class="prod-line">
                        @foreach($fire as $el)
                            <div class="product">
                                <p class="product-name">{{$el->name}}</p>
                                <div class="product-img">
                                    <img data-src="{{asset("public/".$el->photo)}}" alt="door">
                                </div>
                                <p class="product-price">{{$el->price}} сум</p>
                                <a class="product-btn" id="btn" href="{{route('one-door', [$el->category,$el->id])}}">Подробнее</a>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
        </div>

    </section>

@endsection
