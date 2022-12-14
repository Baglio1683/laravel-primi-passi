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
 
    $list= [
        'Hello' => "Lista Persone",
        'list_people' =>[
        'people1' => 'Alberto Baglivi',
        'people2' => 'Ciccio Pasticcio',
        'people3' => 'Mike Tyson'
        ]
    ]; 
    return view('list', $list);

});


Route::get('/movie', function () {

    $list= [
        'Hello' => "Lista Film", 
        'list_movie' =>[
        'people1' => 'Jurassik Park',
        'people2' => 'Guerre Stellari',
        'people3' => 'Il Grinch'
        ]
    ]; 
    return view('movie', $list);

});


Route::get('/food', function () {
    
    $list= [
        'Hello' => "Lista Cibo",
        'list_food' =>[
        'people1' => 'Lasagna',
        'people2' => 'Pizza',
        'people3' => 'Spaghetti'
        ]
    ]; 
    return view('food', $list);

});



