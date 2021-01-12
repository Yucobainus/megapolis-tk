@extends('admin')

@section('product-form')

@if($data->company == 'Buldoors')

<form action="#" enctype="multipart/form-data" method="post">

    @csrf
    <div class="form-sect">
        <label for="name">
            <p>Название</p>
        </label>
        <input type="text" name="name" value="{{$data->name}}" placeholder="Название" id="name">
    </div>

    <div class="form-sect">
        <label for="color">
            <p>Цвет</p>
        </label>
        <input type="text" name="color" value="{{$data->color}}" placeholder="Цвет" id="color">
    </div>

    <div class="form-sect">
        <label for="size">
            <p>Размер</p>
        </label>
        <input type="text" name="size" value="{{$data->size}}" placeholder="Размер" id="size">
    </div>

    <div class="form-sect">
        <label for="main-lock">
            <p>Основной замок</p>
        </label>
        <input type="text" name="main-lock" value="{{$data->mainLock}}" placeholder="Основной замок" id="main-lock">
    </div>

    <div class="form-sect">
        <label for="add-lock">
            <p>Дополнительный замок</p>
        </label>
        <input type="text" name="add-lock" value="{{$data->addLock}}" placeholder="Дополнительный замок" id="add-lock" value="Нет">
    </div>

    <div class="form-sect">
        <label for="cilindr">
            <p>Цилиндр</p>
        </label>
        <input type="text" name="cilindr" value="{{$data->cilindr}}" placeholder="Цилиндр" id="cilindr">
    </div>

    <div class="form-sect">
        <label for="zadv">
            <p>Задвижка</p>
        </label>
        <input type="text" name="zadv" value="{{$data->zadv}}" placeholder="Задвижка" id="zadv">
    </div>

    <div class="form-sect">
        <label for="arm">
            <p>Ручка</p>
        </label>
        <input type="text" name="arm" value="{{$data->arm}}" placeholder="Ручка" id="arm">
    </div>

    <div class="form-sect">
        <label for="glazok">
            <p>Глазок</p>
        </label>
        <input type="text" name="glazok" value="{{$data->glazok}}" placeholder="Глазок" id="glazok">
    </div>

    <div class="form-sect">
        <label for="front">
            <p>Наружная отделка</p>
        </label>
        <input type="text" name="front" value="{{$data->front}}" placeholder="Наружная отделка" id="front">
    </div>

    <div class="form-sect">
        <label for="back">
            <p>Внутренняя отделка</p>
        </label>
        <input type="text" name="back" value="{{$data->back}}" placeholder="Внутренняя отделка" id="back">
    </div>

    <div class="form-sect">
        <label for="notice">
            <p>Примечание</p>
        </label>
        <input type="text" name="notice" value="{{$data->notice}}" placeholder="Примечание" id="notice" value="Нет">
    </div>

    <div class="form-sect">
        <label for="price">
            <p>Цена</p>
        </label>
        <input type="number" name="price" value="{{$data->price}}" placeholder="Цена" id="price">
    </div>



    <input type="hidden" value="{{$data->type}}" name="type">

    <input type="hidden" value="{{$data->photo}}" name="photo">

    <input type="hidden" value="Buldoors" name="company">
    <div class="form-sect">
        <input type="submit" placeholder="Обновить" class="btn">
    </div>

</form>

@endif

@if($data->company == 'Dara')

<form action="#" enctype="multipart/form-data" method="post">
    @csrf
    <div class="form-sect">
        <label for="name">
            <p>Название</p>
        </label>
        <input type="text" name="name" value="{{$data->name}}" placeholder="Название" id="name">
    </div>

    <div class="form-sect">
        <label for="polotno">
            <p>Полотно</p>
        </label>
        <input type="text" name="polotno" value="{{$data->polotno}}" placeholder="Полотно" id="polotno">
    </div>

    <div class="form-sect">
        <label for="glass">
            <p>Стекло</p>
        </label>
        <input type="text" name="glass" value="{{$data->glass}}" placeholder="Стекло" id="glass">
    </div>

    <div class="form-sect">
        <label for="cover">
            <p>Покрытие</p>
        </label>
        <input type="text" name="cover" value="{{$data->cover}}" placeholder="Покрытие" id="cover">
    </div>

    <div class="form-sect">
        <label for="color">
            <p>Цвет</p>
        </label>
        <input type="text" name="color" value="{{$data->color}}" placeholder="Цвет" id="color">
    </div>

    <div class="form-sect">
        <label for="size">
            <p>Размер</p>
        </label>
        <input type="text" name="size" value="{{$data->size}}" placeholder="Размер" id="size">
    </div>

    <div class="form-sect">
        <label for="notice">
            <p>Примечание</p>
        </label>
        <input type="text" name="notice" value="{{$data->notice}}" placeholder="Примечание" id="notice" value="Нет">
    </div>

    <div class="form-sect">
        <label for="cost-for-polotno">
            <p>Цена за полотно</p>
        </label>
        <input type="number" name="cost-for-polotno" value="{{$data->costForPolotno}}" placeholder="Цена за полотно" id="cost-for-polotno">
    </div>

    <div class="form-sect">
        <label for="cost-for-complect">
            <p>Цена за комплект</p>
        </label>
        <input type="number" name="cost-for-complect" value="{{$data->price}}" placeholder="Цена за комплект" id="cost-for-complect">
    </div>


    <input type="hidden" value="{{$data->type}}" name="type">

    <input type="hidden" value="{{$data->photo}}" name="photo">
    <input type="hidden" value="Dara" name="company">
    <div class="form-sect">
        <input type="submit" placeholder="Отправить" class="btn">
    </div>

</form>

@endif

@if($data->company == 'Gardian')

<form action="#" enctype="multipart/form-data" method="post">

    @csrf
    <div class="form-sect">
        <label for="name">
            <p>Название</p>
        </label>
        <input type="text" name="name" value="{{$data->name}}" placeholder="Название" id="name">
    </div>

    <div class="form-sect">
        <label for="character">
            <p>Характеристики</p>
        </label>
        <input type="text" name="character" value="{{$data->character}}" placeholder="Характеристика" id="character">
    </div>

    <div class="form-sect">
        <label for="fill">
            <p>Наполнение</p>
        </label>
        <input type="text" name="fill" value="{{$data->fill}}" placeholder="Наполнение" id="fill">
    </div>

    <div class="form-sect">
        <label for="size">
            <p>Размер</p>
        </label>
        <input type="text" name="size" value="{{$data->size}}" placeholder="Размер" id="size">
    </div>

    <div class="form-sect">
        <label for="main-lock">
            <p>Основной замок</p>
        </label>
        <input type="text" name="main-lock" value="{{$data->mainLock}}" placeholder="Основной замок" id="main-lock">
    </div>

    <div class="form-sect">
        <label for="add-lock">
            <p>Дополнительный замок</p>
        </label>
        <input type="text" name="add-lock" value="{{$data->addLock}}" placeholder="Дополнительный замок" id="add-lock" value="Нет">
    </div>

    <div class="form-sect">
        <label for="cilindr">
            <p>Цилиндр</p>
        </label>
        <input type="text" name="cilindr" value="{{$data->cilindr}}" placeholder="Цилиндр" id="cilindr">
    </div>

    <div class="form-sect">
        <label for="arm">
            <p>Ручка</p>
        </label>
        <input type="text" name="arm" value="{{$data->arm}}" placeholder="Ручка" id="arm">
    </div>

    <div class="form-sect">
        <label for="glazok">
            <p>Глазок</p>
        </label>
        <input type="text" name="glazok" value="{{$data->glazok}}" placeholder="Глазок" id="glazok">
    </div>

    <div class="form-sect">
        <label for="front">
            <p>Наружная отделка</p>
        </label>
        <input type="text" name="front" value="{{$data->front}}" placeholder="Наружная отделка" id="front">
    </div>

    <div class="form-sect">
        <label for="back">
            <p>Внутренняя отделка</p>
        </label>
        <input type="text" name="back" value="{{$data->back}}" placeholder="Внутренняя отделка" id="back">
    </div>

    <div class="form-sect">
        <label for="tipone">
            <p>Первое уточнение</p>
        </label>
        <input type="text" name="tipone" value="{{$data->tipone}}" placeholder="Первое уточнение" id="tipone">
    </div>

    <div class="form-sect">
        <label for="tiptwo">
            <p>Второе уточнение</p>
        </label>
        <input type="text" name="tiptwo" value="{{$data->tiptwo}}" placeholder="Второе уточнение" id="tiptwo">
    </div>

    <div class="form-sect">
        <label for="tipthree">
            <p>Третье уточнение</p>
        </label>
        <input type="text" name="tipthree" value="{{$data->tipthree}}" placeholder="Третье уточнение" id="tipthree">
    </div>

    <div class="form-sect">
        <label for="notice">
            <p>Примечание</p>
        </label>
        <input type="text" name="notice" value="{{$data->notice}}" placeholder="Примечание" id="notice" value="Нет">
    </div>

    <div class="form-sect">
        <label for="price">
            <p>Цена</p>
        </label>
        <input type="number" name="price" value="{{$data->price}}" placeholder="Цена" id="price" value="Нет">
    </div>


    <input type="hidden" value="{{$data->type}}" name="type">

    <input type="hidden" value="{{$data->photo}}" name="photo">

    <input type="hidden" value="Гардиан" name="color">
    <input type="hidden" value="Gardian" name="company">
    <div class="form-sect">
        <input type="submit" class="btn">
    </div>

</form>

@endif

@if($data->category == 'fireplace')

<form action="#" enctype="multipart/form-data" method="post">

    @csrf
    <div class="form-sect">
        <label for="name">
            <p>Название</p>
        </label>
        <input type="text" name="name" value="{{$data->name}}" placeholder="Название" id="name">
    </div>

    <div class="form-sect">
        <label for="portal">
            <p>Портал</p>
        </label>
        <input type="text" name="portal" value="{{$data->portal}}" placeholder="Портал" id="portal">
    </div>

    <div class="form-sect">
        <label for="ochag">
            <p>Очаг</p>
        </label>
        <input type="text" name="ochag" value="{{$data->ochag}}" placeholder="Очаг" id="ochag">
    </div>

    <div class="form-sect">
        <label for="tech">
            <p>Технология горения</p>
        </label>
        <input type="text" name="tech" value="{{$data->tech}}" placeholder="Технология горения" id="tech">
    </div>

    <div class="form-sect">
        <label for="size">
            <p>Габариты</p>
        </label>
        <input type="text" name="size" value="{{$data->size}}" placeholder="Габариты" id="size">
    </div>

    <div class="form-sect">
        <label for="notice">
            <p>Примечание</p>
        </label>
        <input type="text" name="notice" value="{{$data->notice}}" placeholder="Примечание" id="notice" value="Нет">
    </div>

    <div class="form-sect">
        <label for="price">
            <p>Цена</p>
        </label>
        <input type="number" name="price" value="{{$data->price}}" placeholder="Цена" id="price">
    </div>

    <input type="hidden" value="{{$data->photo}}" name="photo">
    <input type="hidden" value="Dimplex" name="company">
    <input type="hidden" value="fireplace" name="category">
    <div class="form-sect">
        <input type="submit" class="btn">
    </div>

</form>

@endif

@if($data->category == 'furniture')

<form action="#" enctype="multipart/form-data" method="post">

    @csrf
    <div class="form-sect">
        <label for="name">
            <p>Название</p>
        </label>
        <input type="text" name="name" value="{{$data->name}}" placeholder="Название" id="name">
    </div>

    <input type="hidden" value="{{$data->company}}" name="company">

    <div class="form-sect">
        <label for="notice">
            <p>Примечание</p>
        </label>
        <input type="text" name="notice" value="{{$data->notice}}" placeholder="Примечание" id="notice">
    </div>

    <div class="form-sect">
        <label for="price">
            <p>Цена</p>
        </label>
        <input type="number" name="price" value="{{$data->price}}" placeholder="Цена" id="price" value="Нет">
    </div>

    <input type="hidden" value="{{$data->photo}}" name="photo">
    <input type="hidden" value="furniture" name="category">
    <div class="form-sect">
        <input type="submit" class="btn">
    </div>

</form>

@endif

@endsection