<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->middleware('demogroup');

Route::get('/file', function(){
    return 'Hello World!';
});

Route::get('/hello', function(){
    return view('hello');
});

Route::get('admin/{number}', 'AdminController@index');

// Route::get('/admin/{number}', function($number){
//     echo "Number passed to closure is: $number";
// })->where(['number'=>"[0-9]+"]);

Route::get('admin/{one}/{two}', function($one,$two){
    echo "one is: $one <br>two is: $two";
});

Route::get('/userinfo/{id}/{course}', 'UserController@userinfo');

Route::redirect('/hello','/file');

// Route::get('/abc/user', function(){
//     echo url('abc', 'user');
// });

Route::get('/xyz/asd', function(){
    echo "B.tech";
})->name('user-number');
Route::get('/user2', function(){
    echo route('user-number');
});

Route::get('/nav', function(){
    return view('nav');
});
Route::get('/page', function(){
    echo url('page');
    return response()->json(['class'=>'btech', 'section'=>'K17PG']);
    // $path = "/Applications/XAMPP/xamppfiles/htdocs/laravel/test.json";
    // return json_decode(file_get_contents($path), true);
});

// Route::get('/demo','DemoController@index');

Route::view('/form1','form');
Route::post('/userform','DemoController@submit');
?>
