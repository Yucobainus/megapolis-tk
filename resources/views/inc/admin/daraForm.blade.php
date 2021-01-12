@extends('admin')

@section('product-form')

<div class="company-name">
    <h2>Dara</h2>
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
        <label for="polotno">
            <p>Полотно</p>
        </label>
        <input type="text" name="polotno" placeholder="Полотно" id="polotno">
    </div>

    <div class="form-sect">
        <label for="glass">
            <p>Стекло</p>
        </label>
        <input type="text" name="glass" placeholder="Стекло" id="glass">
    </div>

    <div class="form-sect">
        <label for="cover">
            <p>Покрытие</p>
        </label>
        <input type="text" name="cover" placeholder="Покрытие" id="cover">
    </div>

    <div class="form-sect">
        <label for="color">
            <p>Цвет</p>
        </label>
        <input type="text" name="color" placeholder="Цвет" id="color">
    </div>

    <div class="form-sect">
        <label for="size">
            <p>Размер</p>
        </label>
        <input type="text" name="size" placeholder="Размер" id="size">
    </div>

    <div class="form-sect">
        <label for="notice">
            <p>Примечание</p>
        </label>
        <input type="text" name="notice" placeholder="Примечание" id="notice" value="Нет">
    </div>

    <div class="form-sect">
        <label for="cost-for-polotno">
            <p>Цена за полотно</p>
        </label>
        <input type="number" name="cost-for-polotno" placeholder="Цена за полотно" id="cost-for-polotno">
    </div>

    <div class="form-sect">
        <label for="cost-for-complect">
            <p>Цена за комплект</p>
        </label>
        <input type="number" name="cost-for-complect" placeholder="Цена за комплект" id="cost-for-complect">
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
        <input type="file" name="photo" id="photo" multiple="false" class="filePlace" accept="image/*">
    </div>
    <input type="hidden" value="Dara" name="company">
    <div class="form-sect">
        <input type="submit" class="btn" placeholder="Отправить">
    </div>

</form>

@endsection