<?php

use Illuminate\Support\Facades\Route;

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
    return "This is the main page";
});

Route::get('/hello', function(){
    return "Hello World!";
})->name('hello'); //naming routes

//Redirecting routes
Route::get('hallo', function(){
    //return redirect('hello');
    return redirect()->route('hello');
});

//dynamic routes
Route::get('/greetings/{name}', function($name){
    return "Good Afternoon ". $name. "." . " Welcome!";
});

//fallback route
Route::fallback(function(){
    return "Page not found";
});
