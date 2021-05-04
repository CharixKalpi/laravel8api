<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){
        $title = 'Welcome to Laravel 8';
        $createdBy = 'Charika';
        return view('products.view',compact('title','createdBy'));
    }

    public function about(){
        return 'About the product';
    }
}
