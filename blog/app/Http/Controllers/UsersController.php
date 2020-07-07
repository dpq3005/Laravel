<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    function account(Request $req){
        // return $req->input();
        // echo $req->input('email');
        $req->validate([
            'address'=>'required | min:3 | max:7',
            'email'=>'required | email'
        ]);
        return $req->input();
    }

    function index(){
        echo "Hello controller";
    }
}
