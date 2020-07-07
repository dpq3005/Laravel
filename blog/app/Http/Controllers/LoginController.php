<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    function login(request $req){
        // return $req->input();
        $req->session()->put('loginData',$req->input());
        return $req->session()->get('loginData');


    }
}
