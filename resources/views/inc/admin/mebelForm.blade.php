@extends('admin')

@section('product-form')


<div class="company-name">
    <h2>Мебель</h2>
</div>


<form action="{{route('add-mebel')}}" enctype="multipart/form-data" method="post">

    @csrf
    <div class="form-sect">
        <label for="name">
            <p>Название</p>
        </label>
        <input type="text" name="name" placeholder="Название" id="name">
    </div>

    <div class="form-sect">
        <label for="company">
            <p>Компания</p>
        </label>
        <select name="company" id="company">
            <option>Wellwood</option>
            <option>Module-Mebel</option>
        </select>
    </div>

    <div class="form-sect">
        <label for="notice">
            <p>Примечание</p>
        </label>
        <input type="text" name="notice" placeholder="Примечание" id="notice">
    </div>

    <div class="form-sect">
        <label for="price">
            <p>Цена</p>
        </label>
        <input type="number" name="price" placeholder="Цена" id="price" value="Нет">
    </div>

    <div class="form-sect">
        <label for="photo">
            <p>Выберите фотографию</p>
        </label>
        <input type="file" name="photo" id="photo" multiple="false" accept="image/*" class="filePlace">
    </div>
    <input type="hidden" value="furniture" name="category">
    <div class="form-sect">
        <input type="submit" class="btn">
    </div>

</form>


@endsection