@extends('admin')

@section('product-form')

    <form action="{{route('add-slide')}}" enctype="multipart/form-data" method="post">
        @csrf

        @foreach($slides as $el)
            <div class="form-sect">
            <img src="{{asset($el->photo)}}">
                <p>{{$el->sliderName}}</p>
                <div class="delete"><a>Удалить</a></div>
            </div>
        @endforeach
    </form>
@endsection
