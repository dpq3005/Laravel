<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class Users extends Controller
{
    //
    function save(Request $req){
        $user = new User;
        $user->id = $req->id;
        $user->name = $req->name;
        $user->address = $req->address;
        $user->phone = $req->phone;
        $user->save();
    }

    function update(Request $req){
        $user = User::find($req->id);
        $user->name = $req->name;
        $user->address = $req->address;
        $user->phone = $req->phone;
        $user->save();
    }

}
