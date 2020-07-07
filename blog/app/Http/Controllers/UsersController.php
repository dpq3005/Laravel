<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    function account(Request $req){
        // return $req->input();
        // echo $req->input('email');
        return $req->query();
    }

    function index(){
        echo "Hello controller";
    }
}
