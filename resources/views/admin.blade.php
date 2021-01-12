<!DOCTYPE html>
<html lang="en" style="overflow-y: scroll">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('public/css/main.css') }}">
    <title>Консоль</title>
</head>

<body>

<div class="plash">
    <div>
        <a href="{{route('home')}}"><img src="{{asset('public/pictures/logo.svg')}}"></a>
    </div>
</div>

<section class="a-panel">

    <div class="left-side">

        <div class="settings-block" id="add">
            <div class="title">
                <img src="{{asset('public/pictures/icons/add-button.svg')}}">
                <h3>Добавление товаров</h3>
            </div>
            <div class="list" id="add-list">
                <a href="{{route('buldoors-form')}}">Бульдорс</a>
                <a href="{{route('dara-form')}}">Dara</a>
                <a href="{{route('gardian-form')}}">Гардиан</a>
                <a href="{{route('mebel-form')}}">Мебель</a>
                <a href="{{route('fireplace-form')}}">Dimplex</a>
            </div>
        </div>

        <div class="settings-block" id='edit'>
            <div class="title">
                <img src="{{asset('public/pictures/icons/edit.svg')}}">
                <h3>Редактирование товаров</h3>
            </div>
            <div class="list" id="edit-list">
                <a href="{{route('product-list', $section = 'Buldoors')}}">Бульдорс</a>
                <a href="{{route('product-list', $section = 'Dara')}}">Dara</a>
                <a href="{{route('product-list', $section = 'Gardian')}}">Гардиан</a>
                <a href="{{route('product-list', $section = 'Furniture')}}">Мебель</a>
                <a href="{{route('product-list', $section = 'Fireplace')}}">Dimplex</a>
            </div>
        </div>

        <div class="settings-block" id='slide'>
            <div class="title">
                <img src="{{asset('public/pictures/icons/edit.svg')}}">
                <h3>Слайдер</h3>
            </div>
            <div class="list" id="slide-list">
                <a href="{{route('slider-form')}}">Добавление слайдов</a>

            </div>
        </div>

        <div class="settings-block" id='price'>
            <div class="title">
                <img src="{{asset('public/pictures/icons/edit.svg')}}">
                <a href="{{route('prices')}}">Изменение цен на доставку</a>
            </div>
        </div>

    </div>

    <div class="right-side">
        @yield('product-form')
    </div>

</section>

<script src="{{asset('public/js/jquery-3.5.1.min.js')}}"></script>
<script>
    $('#add').on('click', function () {

        if ($('#add-list').hasClass('open-list')) {
            $('#add-list').removeClass('open-list')
            $('#add-list').addClass('close-list')
        } else {
            $('#add-list').removeClass('close-list')
            $('#add-list').addClass('open-list')
        }
    })

    $('#edit').on('click', function () {

        if ($('#edit-list').hasClass('open-list')) {
            $('#edit-list').removeClass('open-list')
            $('#edit-list').addClass('close-list')
        } else {
            $('#edit-list').removeClass('close-list')
            $('#edit-list').addClass('open-list')
        }
    })

    $('#slide').on('click', function () {

        if ($('#slide-list').hasClass('open-list')) {
            $('#slide-list').removeClass('open-list')
            $('#slide-list').addClass('close-list')
        } else {
            $('#slide-list').removeClass('close-list')
            $('#slide-list').addClass('open-list')
        }
    })

</script>

</body>

</html>
