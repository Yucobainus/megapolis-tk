@extends('admin')

@section('product-form')

    <div class="company-name">
        <h2>Мебель</h2>
    </div>

    <form action="#" enctype="multipart/form-data" method="post">

        @csrf
        <div class="form-sect">
            <label for="price">
                <p>Простая дверь</p>
            </label>
            <input type="text" name="price" placeholder="{{$data->price}}" id="price">
        </div>

        <div class="form-sect">
            <label for="priceWithD">
                <p>Дверь с МДФ</p>
            </label>
            <input type="text" name="priceWithD" placeholder="{{$data->priceWithD}}" id="priceWithD">
        </div>

        <div class="form-sect">
            <label for="priceStair">
                <p>Подъём на этаж</p>
            </label>
            <input type="text" name="priceStair" placeholder="{{$data->priceStair}}" id="priceStair">
        </div>

        <div class="form-sect">
            <input type="submit" class="btn">
        </div>
    </form>


@endsection
