@extends('admin')

@section('product-form')


<div class="lines-wrapper">
    @foreach($data as $el)
    @if($el->company == 'Buldoors' || $el->company == 'Gardian' || $el->company == 'Dara')

    <div class="onepr">

        <img src="{{asset("public/".$el->photo)}}">
        <div>
            <p>{{$el->name}}</p>
        </div>
        <div>
            <p>{{$el->color}}</p>
        </div>
        <div>
            <p>{{$el->price}} сум</p>
        </div>
        <div class="update"> <a href="{{route('product-update', [$el->company,$el->id])}}">Редактировать</a></div>
        <div class="delete"> <a href="{{route('product-delete', [$el->company,$el->id])}}">Удалить</a></div>
    </div>

    @endif
    @if($el->category == 'furniture')
    <div class="onepr">

        <img src="{{asset($el->photo)}}">
        <div>
            <p>{{$el->name}}</p>
        </div>
        <div>
            <p>{{$el->company}}</p>
        </div>
        <div>
            <p>{{$el->price}} сум</p>
        </div>
        <div class="update"> <a href="{{route('product-update', [$el->company,$el->id])}}">Редактировать</a></div>
        <div class="delete"> <a href="{{route('product-delete', [$el->company,$el->id])}}">Удалить</a></div>
    </div>
    @endif
    @if($el->category == 'fireplace')
    <div class="onepr">

        <img src="{{asset($el->photo)}}">
        <div>
            <p>{{$el->name}}</p>
        </div>
        <div>
            <p>{{$el->price}} сум</p>
        </div>
        <div class="update"> <a href="{{route('product-update', [$el->company,$el->id])}}">Редактировать</a></div>
        <div class="delete"> <a href="{{route('product-delete', [$el->company,$el->id])}}">Удалить</a></div>
    </div>
    @endif
    @endforeach
</div>


@endsection
