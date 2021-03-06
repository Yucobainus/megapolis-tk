@extends('admin')

@section('product-form')

<div class="company-name">
        <h2>Гардиан</h2>
    </div>


    <form action="{{route('add-door')}}" enctype="multipart/form-data" method="post">

        @csrf
        <div class="form-sect">
            <label for="name">
                <p>Название</p>
            </label>
            <input type="text" name="name" placeholder="Название" id="name">
        </div>

        <div class="form-sect">
            <label for="character">
                <p>Характеристики</p>
            </label>
            <input type="text" name="character" placeholder="Характеристика" id="character">
        </div>

        <div class="form-sect">
            <label for="fill">
                <p>Наполнение</p>
            </label>
            <input type="text" name="fill" placeholder="Наполнение" id="fill">
        </div>

        <div class="form-sect">
            <label for="size">
                <p>Размер</p>
            </label>
            <input type="text" name="size" placeholder="Размер" id="size">
        </div>

        <div class="form-sect">
            <label for="main-lock">
                <p>Основной замок</p>
            </label>
            <input type="text" name="main-lock" placeholder="Основной замок" id="main-lock">
        </div>

        <div class="form-sect">
            <label for="add-lock">
                <p>Дополнительный замок</p>
            </label>
            <input type="text" name="add-lock" placeholder="Дополнительный замок" id="add-lock" value="Нет">
        </div>

        <div class="form-sect">
            <label for="cilindr">
                <p>Цилиндр</p>
            </label>
            <input type="text" name="cilindr" placeholder="Цилиндр" id="cilindr">
        </div>

        <div class="form-sect">
            <label for="arm">
                <p>Ручка</p>
            </label>
            <input type="text" name="arm" placeholder="Ручка" id="arm">
        </div>

        <div class="form-sect">
            <label for="glazok">
                <p>Глазок</p>
            </label>
            <input type="text" name="glazok" placeholder="Глазок" id="glazok">
        </div>

        <div class="form-sect">
            <label for="front">
                <p>Наружная отделка</p>
            </label>
            <input type="text" name="front" placeholder="Наружная отделка" id="front">
        </div>

        <div class="form-sect">
            <label for="back">
                <p>Внутренняя отделка</p>
            </label>
            <input type="text" name="back" placeholder="Внутренняя отделка" id="back">
        </div>

        <div class="form-sect">
            <label for="tipone">
                <p>Первое уточнение</p>
            </label>
            <input type="text" name="tipone" placeholder="Первое уточнение" id="tipone">
        </div>

        <div class="form-sect">
            <label for="tiptwo">
                <p>Второе уточнение</p>
            </label>
            <input type="text" name="tiptwo" placeholder="Второе уточнение" id="tiptwo">
        </div>

        <div class="form-sect">
            <label for="tipthree">
                <p>Третье уточнение</p>
            </label>
            <input type="text" name="tipthree" placeholder="Третье уточнение" id="tipthree">
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
            <input type="number" name="price" placeholder="Цена" id="price" value="Нет">
        </div>

        <div class="form-sect">
            <label for="type">
                <p>Выберите тип двери</p>
            </label>
            <select name="type" id="type">
                <option>Межкомнатные двери</option>
                <option>Входные двери</option>
            </select>
        </div>

        <div class="form-sect">
            <label for="photo">
                <p>Выберите фотографию</p>
            </label>
            <input type="file" name="photo" id="photo" multiple="false" accept="image/*" class="filePlace">
        </div>
        <input type="hidden" value="Гардиан" name="color">
        <input type="hidden" value="Gardian" name="company">
        <div class="form-sect">
            <input type="submit" class="btn">
        </div>

    </form>


@endsection
