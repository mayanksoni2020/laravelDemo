<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function userinfo($id='0',$course='0',Request $request){
        echo $request->fullUrl('userinfo');
        return response()->json(['id'=>$id, 'course'=>$course]);

        // return view('userinfo', ['id'=>$id, 'course'=>$course]);
    }
}

?>
