<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function userinfo($id,$course){
        return view('userinfo', ['id'=>$id, 'course'=>$course]);
    }
}

?>
