<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class Orders extends Controller
{
    //

    function index(){
        return Product::where('name','DPQ')->get();
    }
}
