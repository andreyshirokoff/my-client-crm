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
Route::get('/login', function () {
    return view('login');
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
Route::get('/functions/news_view', function () {
    return view('news_view');
});

//settings
Route::get('/ustawienia', function () {
    return view('ustawienia');
});

//ustawienia
Route::get('/functions/usrimage', function () {
    return view('ustawienia.usrimage');
});
Route::get('/functions/editaccount', function () {
    return view('ustawienia.editaccount');
});
Route::get('/functions/usrsignature', function () {
    return view('ustawienia.usrsignature');
});
Route::get('/functions/usrpin', function () {
    return view('ustawienia.usrpin');
});
Route::get('/functions/rodoreset', function () {
    return view('ustawienia.rodoreset');
});

Route::get('/functions/document_kartaklienta_edit', function () {
    return view('ustawienia.document_kartaklienta_edit');
});
Route::get('/functions/worker_create', function () {
    return view('ustawienia.worker_create');
});
Route::get('/functions/treatment_template', function () {
    return view('ustawienia.treatment_template');
});
Route::get('/functions/treatment_create', function () {
    return view('ustawienia.treatment_create');
});
Route::get('/functions/product_create', function () {
    return view('ustawienia.product_create');
});


