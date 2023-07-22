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

//Route::get('/login', function () {
//    return view('login');
//});



Route::middleware('auth')->prefix('dashboard')->group(function (){
    Route::get('/', [\App\Http\Controllers\DashboardPageController::class, 'index'])->name('dashboard');

    if(Schema::hasTable('news')){
        Route::get('/news/{slug}', [\App\Http\Controllers\NewsPageController::class, 'index'])->name('news');
    }
});


//functions
Route::get('/functions/client_create', function () {
    return view('client_create');
})->middleware(['auth']);
Route::get('/functions/client_search', function () {
    return view('client_search');
})->middleware(['auth']);
Route::get('/functions/document_search', function () {
    return view('document_search');
})->middleware(['auth']);

//settings
Route::get('/ustawienia', function () {
    return view('ustawienia');
})->middleware(['auth']);

//ustawienia
Route::get('/functions/usrimage', function () {
    return view('ustawienia.usrimage');
})->middleware(['auth']);
Route::get('/functions/editaccount', function () {
    return view('ustawienia.editaccount');
})->middleware(['auth']);
Route::get('/functions/usrsignature', function () {
    return view('ustawienia.usrsignature');
})->middleware(['auth']);
Route::get('/functions/usrpin', function () {
    return view('ustawienia.usrpin');
})->middleware(['auth']);
Route::get('/functions/rodoreset', function () {
    return view('ustawienia.rodoreset');
})->middleware(['auth']);

Route::get('/functions/document_kartaklienta_edit', function () {
    return view('ustawienia.document_kartaklienta_edit');
})->middleware(['auth']);
Route::get('/functions/worker_create', function () {
    return view('ustawienia.worker_create');
})->middleware(['auth']);
Route::get('/functions/treatment_template', function () {
    return view('ustawienia.treatment_template');
})->middleware(['auth']);
Route::get('/functions/treatment_create', function () {
    return view('ustawienia.treatment_create');
})->middleware(['auth']);
Route::get('/functions/product_create', function () {
    return view('ustawienia.product_create');
})->middleware(['auth']);


