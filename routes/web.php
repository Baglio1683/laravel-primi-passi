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

    $Name_buttons = [
        'List' => 'Lista Persone',
        'Movies' => 'Lista Film',
        'Foods' => 'Lista Cibo'
    ]; 
    return view('home', $Name_buttons);

});


Route::get('/list', function () {

    $Hello = "Hello I am The list"; 
    return view('list', compact('Hello'));

});


Route::get('/movie', function () {

    $Hello = "Hello I am The list of movies"; 
    return view('movie', compact('Hello'));

});


Route::get('/food', function () {

    $Hello = "Hello I am The list of foods"; 
    return view('food', compact('Hello'));

});



