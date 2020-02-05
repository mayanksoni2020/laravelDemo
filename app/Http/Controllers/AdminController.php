<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index($number){
        echo "Index method from AdminController<br>";
        echo "Number passed is: $number";
    }
}

?>