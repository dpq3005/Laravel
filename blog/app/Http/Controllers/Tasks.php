<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Tasks extends Controller
{
    //
    function index(Request $req){
        $req->session()->flash('status','Task has been submitted');
        return redirect('task');
    }
}
