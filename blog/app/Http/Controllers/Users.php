<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users extends Controller
{
    //
    function index(){
        return ['name'=>'DPQ'];
    }
    function show($id){
        echo "Hello from controller".$id;
    }
}
