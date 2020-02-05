<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    // public function index(Request $req){
    //     //print_r($req);
    //     //print_r($req->input());
    //     echo "<br>".$req->url();
    //     echo "<br>".$req->path();
    //     if($req->isMethod('GET')){
    //         echo "<br>".$req->fullurl();
    //     }
    //     echo "<br>";
    //     print_r($req->query());
    // }

    public function submit(Request $request){
        print_r($request->input());
        $request->validate([
            "user"=>"required",
            "password"=>"min:5 | max:10"
        ]);
    }
}
?>