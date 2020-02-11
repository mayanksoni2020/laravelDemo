<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BladeController extends Controller
{
    public function index(){
        $data = ['name'=>'abc','email'=>'abc@gmail.com','head'=>'<h1>B.Tech Class</h1>'];
        return view('user', ['data'=>$data]);
    }
}
