<?php

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
    return view('index');
});

//functions
Route::get('/functions/client_create', function () {
    return view('client_create');
});
Route::get('/functions/client_search', function () {
    return view('client_search');
});
Route::get('/functions/document_search', function () {
    return view('document_search');
});

