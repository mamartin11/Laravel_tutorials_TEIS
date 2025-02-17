<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;

use Illuminate\View\View;


class ProductController extends Controller

{

    public static $products = [

        ["id"=>"1", "name"=>"TV", "description"=>"Best TV -> $700 USD"],
        ["id"=>"2", "name"=>"iPhone", "description"=>"Best iPhone -> $1100 USD"],
        ["id"=>"3", "name"=>"Chromecast", "description"=>"Best Chromecast -> $55 USD"],
        ["id"=>"4", "name"=>"Glasses", "description"=>"Best Glasses -> $245 USD"]
];


public function index(): View

{

    $viewData = [];
    $viewData["title"] = "Products - Online Store";
    $viewData["subtitle"] = "List of products";
    $viewData["products"] = ProductController::$products;
    return view('product.index')->with("viewData", $viewData);

}


public function show(string $id) : View
    {   
        $viewData = [];
        $product = ProductController::$products[$id-1];


        $viewData["title"] = $product["name"]." - Online Store";
        $viewData["subtitle"] = $product["name"]." - Product information";
        $viewData["product"] = $product;
        return view('product.show')->with("viewData", $viewData);
    }

}