<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   function index()
    {
        //
            $product = new Product;
            $product->name = "samsung";
            $product->category = "tv";
            echo $product->save();

        
    }

   
}
