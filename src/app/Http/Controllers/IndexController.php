<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class IndexController extends Controller
{

    public function index()
    {
        $products = Product::all();
        return view('welcome',[
            'products'=>$products
        ]);
    }

}
