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
});

Route::get('/ciao', function() {

//    return view('ciao')
//        ->with('title', 'CIAO!!!11');

    return view('ciao', [
        'title' => 'ciao 123',
    ]);
});


Route::resource('/groups', 'GroupController');

