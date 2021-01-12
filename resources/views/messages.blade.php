@extends('layouts.app')

@section('title-of-site')Все сообщения @endsection

@section('content')



    <section>
        <h1>Все сообщения</h1>
        @foreach($data as $el)
            <div>
                <h3>{{$el->message}}</h3>
            </div>
        @endforeach

    </section>
@endsection
