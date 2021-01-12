<?php

use Illuminate\Support\Facades\Route;

//Настройка цен на доставку
Route::get('admin/deliverySettings', 'App\Http\Controllers\AdminController@changePrices')->name('prices');
Route::post('admin/deliverySettings', 'App\Http\Controllers\AdminController@updatePrices')->name('update-prices');

/*--Главные страницы--*/

Route::get('/', 'App\Http\Controllers\HomeController@showPage')->name('home');

Route::get('about', 'App\Http\Controllers\HomeController@showAbout')->name('about');
Route::get('contact','App\Http\Controllers\HomeController@showContact')->name('contact');
Route::get('partners', 'App\Http\Controllers\HomeController@showPartners')->name('partners');

//Админ панель главная
Route::get('admin','App\Http\Controllers\AdminController@showAdmin' )->name('admin');

Route::get('aut', 'App\Http\Controllers\AdminController@showAut')->name('show-aut');
Route::post('aut', 'App\Http\Controllers\AdminController@adminAut')->name('aut');


Route::get('contact/all', 'App\Http\Controllers\ContactController@allData')->name('contact-data');

Route::post('contact/submit', 'App\Http\Controllers\ContactController@submit')->name('contact-form');


//Добавление продуктов (Страницы)

Route::get('admin/dara', function (){
    return view('inc/admin/daraForm');
})->name('dara-form');
Route::get('admin/buldoors', function (){
    return view('inc/admin/buldoorsForm');
})->name('buldoors-form');
Route::get('admin/gardian', function (){
    return view('inc/admin/gardianForm');
})->name('gardian-form');
Route::get('admin/mebel', function (){
    return view('inc/admin/mebelForm');
})->name('mebel-form');
Route::get('admin/fireplace', function (){
    return view('inc/admin/fireplaceForm');
})->name('fireplace-form');


/*--Продукция--*/

//Отображение страниц с товарами
Route::get('enter-doors', 'App\Http\Controllers\CategoriesController@showEnter')->name('enterDoors');
Route::get('room-doors', 'App\Http\Controllers\CategoriesController@showRoom')->name('roomDoors');
Route::get('furniture', 'App\Http\Controllers\CategoriesController@showFurniture')->name('furniture');
Route::get('fireplace', 'App\Http\Controllers\CategoriesController@showFireplace')->name('fireplace');
Route::get('delivery', 'App\Http\Controllers\CategoriesController@showDelivery')->name('delivery');

//Один товар
Route::get('{company}/{id}', 'App\Http\Controllers\CategoriesController@showOneProduct')->name('one-door');

//Страницы с товаром отфильтрованные
Route::post('enter-door-filter', 'App\Http\Controllers\CategoriesController@enterDoorFilter')->name('enter-door-filter');
Route::post('room-door-filter', 'App\Http\Controllers\CategoriesController@roomDoorFilter')->name('room-door-filter');
Route::post('mebel-filter', 'App\Http\Controllers\CategoriesController@mebelFilter')->name('mebel-filter');
Route::post('fireplace-filter', 'App\Http\Controllers\CategoriesController@fireplaceFilter')->name('fireplace-filter');

//Вся продукция
Route::post('production-filter', 'App\Http\Controllers\CategoriesController@productionFilter')->name('production-filter');
Route::get('production',  'App\Http\Controllers\CategoriesController@showAllProduction')->name('production');


/*--Админ панель--*/

//Добавление продуктов (действие)
Route::post('addDoor', 'App\Http\Controllers\DoorsController@addProduct')->name('add-door');
Route::post('addMebel', 'App\Http\Controllers\MebelController@addMebel')->name('add-mebel');
Route::post('addFireplace', 'App\Http\Controllers\FireplaceController@addFireplace')->name('add-fireplace');

//Получить список продуктов
Route::get('admin/product-list/{section}', 'App\Http\Controllers\AdminController@showAdminList')->name('product-list');

//Обновить один продукт
Route::get('admin/product-list/update/product-update/{company}/{id}', 'App\Http\Controllers\AdminController@productUpdate')->name('product-update');
Route::post('admin/product-list/update/product-update/{company}/{id}', 'App\Http\Controllers\AdminController@updatePr')->name('update-one-product');

//Удалить один продукт
Route::get('admin/product-list/update/product-delete/{company}/{id}', 'App\Http\Controllers\AdminController@productDelete')->name('product-delete');

//Настройки слайдера
Route::get('slider-add', 'App\Http\Controllers\SliderController@sliderForm')->name('slider-form');
Route::get('slider-order', 'App\Http\Controllers\SliderController@sliderOrder')->name('slider-order');
Route::post('addSlide', 'App\Http\Controllers\SliderController@addSlide')->name('add-slide');


Route::post('product/' , 'App\Http\Controllers\CartController@addToCart')->name('add-to-cart');
Route::post('send-email', 'App\Http\Controllers\CartController@confirmOrder')->name('confirm-order');

Route::get('testup', 'App\Http\Controllers\SliderController@addSlide')->name('testUp');

Route::get('success', function (){
    return view('pages.confirm');
});
