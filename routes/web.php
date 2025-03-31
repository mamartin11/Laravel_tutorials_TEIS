<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home.index');
Route::get('/about', function () {

    $data1 = 'About us - Online Store';

    $data2 = 'About us';

    $description = 'This is an about page ...';

    $author = 'Developed by: Miguel Martínez';

    return view('home.about')->with('title', $data1)
        ->with('subtitle', $data2)
        ->with('description', $description)
        ->with('author', $author);

})->name('home.about');

Route::get('/contact', function () {

    $data1 = 'Contact us - Online Store';

    $data2 = 'Contact us';

    $email = 'fakecompany@gmail.com';

    $address = '441 N Fairfax Ave, Los Angeles, CA 90036';

    $phone_number = '+1 323-424-4504';

    return view('home.about')->with('title', $data1)
        ->with('subtitle', $data2)
        ->with('description', $email)
        ->with('author', $address)
        ->with('author', $phone_number);

})->name('home.contact');

Route::get('/products', 'App\Http\Controllers\ProductController@index')->name('product.index');

Route::get('/products/create', 'App\Http\Controllers\ProductController@create')->name('product.create');

Route::post('/products/save', 'App\Http\Controllers\ProductController@save')->name('product.save');

Route::get('/products/{id}', 'App\Http\Controllers\ProductController@show')->name('product.show');

Route::get('/cart', 'App\Http\Controllers\CartController@index')->name('cart.index');

Route::get('/cart/add/{id}', 'App\Http\Controllers\CartController@add')->name('cart.add');

Route::get('/cart/removeAll/', 'App\Http\Controllers\CartController@removeAll')->name('cart.removeAll');

Route::get('/image', 'App\Http\Controllers\ImageController@index')->name('image.index');

Route::post('/image/save', 'App\Http\Controllers\ImageController@save')->name('image.save');

Route::get('/image-not-di', 'App\Http\Controllers\ImageNotDIController@index')->name('imagenotdi.index');

Route::post('/image-not-di/save', 'App\Http\Controllers\ImageNotDIController@save')->name('imagenotdi.save');
