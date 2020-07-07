<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;



class Profiles extends Controller
{
    //

    function list(){
        $data = Http::get('https://jsonplaceholder.typicode.com/posts') ->json();

        return view('profile',['data'=>$data]);
    }

    function store(Request $req){
        // echo  "Hello from controller";
        $path = $req->file('img')->store('avatars');
        return ['path'=>$path,'upload'=>'success'];
    }

    function index(){
        $data=DB::table('youtubes')->where('name','DPQ')->update(['view'=>'25555']);
        print_r($data);
    }
}
