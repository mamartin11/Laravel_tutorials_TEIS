<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\HomeController@index')->name("home.index");
Route::get('/about', function () {

    $data1 = "About us - Online Store";
    
    $data2 = "About us";
    
    $description = "This is an about page ...";
    
    $author = "Developed by: Miguel Martínez";
    
    return view('home.about')->with("title", $data1)
    
    ->with("subtitle", $data2)
    
    ->with("description", $description)
    
    ->with("author", $author);
    
    })->name("home.about");


Route::get('/contact', function () {

    $data1 = "Contact us - Online Store";
    
    $data2 = "Contact us";
    
    $email = "fakecompany@gmail.com";
    
    $address = "441 N Fairfax Ave, Los Angeles, CA 90036";

    $phone_number = "+1 323-424-4504";
    
    return view('home.about')->with("title", $data1)
    
    ->with("subtitle", $data2)
    
    ->with("description", $email)
    
    ->with("author", $address)

    ->with("author", $phone_number);
    
    })->name("home.contact");

Route::get('/products', 'App\Http\Controllers\ProductController@index')->name("product.index");

Route::get('/products/create', 'App\Http\Controllers\ProductController@create')->name("product.create");

Route::get('/products/save', function () {

    $data1 = "Save - Online Store";
    
    $data2 = "Product Saved";
    
    $description = "Your product has been saved successfully";
    
    
    return view('home.about')->with("title", $data1)
    
    ->with("subtitle", $data2)
    
    ->with("description", $description);
    
    
    })->name("product.save");

Route::get('/products/{id}', 'App\Http\Controllers\ProductController@show')->name("product.show");
