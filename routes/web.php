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

Route::get('/', "IndexController@loadViewAction");

Route::get('/detail/{id}', "MainController@detail");

Route::get('/checkout', "MainController@checkout");

Route::get('/menu', "MainController@menu");

Route::get('/search', "MainController@search");

Route::get('/food-type', "MainController@foodType");

Route::get('/contact', "MainController@contact");

Route::group(['prefix'=>'Group'],function (){

    Route::get('/huy',function (){
        return "<h1>Hello world</h1>";
    });

    Route::get('/ten/{ten}',function ($ten){
        return "<h1>Ten : " . $ten ."</h1>";
    })->where(['ten'=>'[a-zA-Z]+']);
});

Route::get("/Hello/{name}","HelloController@showHello");
