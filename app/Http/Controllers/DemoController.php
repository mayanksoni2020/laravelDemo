<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    

    public function submit(Request $request){
        print_r($request->input());
        $request->validate([
            "fname"=>"required|max:20",
            "lname"=>"required|max:20",
            "gender"=>"required",
            "fatname"=>"required|max:50",
            "motname"=>"required|max:50",
            "email"=>"required|email",
            "mob"=>"required|min:10",
            "sname"=>"required|max:50",
            "strname"=>"required|max:50",
            "cgpa"=>"required"
        ]);
    }
}
?>