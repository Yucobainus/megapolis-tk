@extends('admin')

@section('product-form')

<div class="company-name">
        <h2>Dimplex</h2>
    </div>


    <form action="{{route('add-fireplace')}}" enctype="multipart/form-data" method="post">

        @csrf
        <div class="form-sect">
            <label for="name">
                <p>Название</p>
            </label>
            <input type="text" name="name" placeholder="Название" id="name">
        </div>

        <div class="form-sect">
            <label for="portal">
                <p>Портал</p>
            </label>
            <input type="text" name="portal" placeholder="Портал" id="portal">
        </div>

        <div class="form-sect">
            <label for="ochag">
                <p>Очаг</p>
            </label>
            <input type="text" name="ochag" placeholder="Очаг" id="ochag">
        </div>

        <div class="form-sect">
            <label for="tech">
                <p>Цвет</p>
            </label>
            <input type="text" name="tech" placeholder="Цвет" id="tech">
        </div>

        <div class="form-sect">
            <label for="size">
                <p>Габариты</p>
            </label>
            <input type="text" name="size" placeholder="Габариты" id="size">
        </div>

        <div class="form-sect">
            <label for="notice">
                <p>Примечание</p>
            </label>
            <input type="text" name="notice" placeholder="Примечание" id="notice" value="Нет">
        </div>

        <div class="form-sect">
            <label for="price">
                <p>Цена</p>
            </label>
            <input type="number" name="price" placeholder="Цена" id="price">
        </div>

        <div class="form-sect">
            <label for="photo">
                <p>Выберите фотографию</p>
            </label>
            <input type="file" name="photo" id="photo" multiple="false" accept="image/*" class="filePlace">
        </div>
        <input type="hidden" value="Dimplex" name="company">
        <input type="hidden" value="fireplace" name="category">
        <div class="form-sect">
            <input type="submit" class="btn">
        </div>

    </form>


@endsection
