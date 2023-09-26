<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/hello',function($name=null){
    return 'hello world ';
});

Route::get('/users/{id?}/{name?}',function($id=null,$name="Laravel"){
    return 'My id is : '.$id.' my name is '.$name;
});

Route::get('/regex/{name?}',function($name="Laravel"){
    return 'My name is '.$name;
})->where('name','[A-Za-z]+');

Route::match(['get','post'],'/matchtest', function (Request $req) {
    return "My method is : ".$req->method();
});

Route::any('/matchtestany', function (Request $req) {
    return "My request method is : ".$req->method();
});

