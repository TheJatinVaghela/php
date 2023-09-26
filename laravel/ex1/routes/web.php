<?php

use Faker\Core\Number;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/post/{id?}/comment/{comment_ID?}',function($id = null,$comment_ID = null){
    if($id & $comment_ID){
        return "<h1>".$comment_ID ." = " . "</h1>" . "<h1>".$id."</h1>";
    }else{
        return "<h1> no ID Found </h1>";
    }
// })->whereNumber('id');
// })->whereIn('id',[1,'one','@']);
})->where('id','[a-zA-Z0-9]+')->name("POST"); //[] isske under regular expression hei

Route::get('/Home/BOy/pist/Post',function(){
    return "<h1>Post Page</h1>";
})->name("POST_PAGE");

Route::get('/text',function(){return  "<h1>Text Page</h1>";})->name('TEXT_PAGE');
Route::redirect('/text','/Home/BOy/pist/Post');

//Laravel routes groups
Route::prefix('post')->group(function(){
   Route::get('/one',function(){return "<h1>ONE</h1>";})->name('ONE');
   Route::get('/two',function(){return "<h1>TWO</h1>";})->name('TWO');
   Route::get('/three/nice/oho',function(){return "<h1>/three/nice/oho</h1>";})->name('OHO');
});

//if user trys to open a page that does not exist
Route::fallback(function(){
    return "<h1>This Page Does Not Exits </h1>";
});

// Route::get('/hola',function(){
//     return view("pages/header");
// });
