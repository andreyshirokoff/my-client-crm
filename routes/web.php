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
Route::get('/', function (){
    if (auth()->user()) return redirect()->route('dashboard');
    else return redirect()->route('login');
});

Route::middleware('auth')->prefix('dashboard')->group(function (){
    Route::get('/', [\App\Http\Controllers\DashboardPageController::class, 'index'])->name('dashboard');

    Route::get('/client-create', [\App\Http\Controllers\DashboardPageController::class, 'createClient'])->name('createClient');
    Route::get('/client-search', [\App\Http\Controllers\DashboardPageController::class, 'searchClient'])->name('searchClient');
    Route::get('/functions/document_search', [\App\Http\Controllers\DashboardPageController::class, 'documentSearch'])->name('documentSearch');

    Route::prefix('ustawienia')->group(function (){
        Route::get('/', [\App\Http\Controllers\DashboardPageController::class, 'settings'])->name('settings');
        Route::get('/worker-create', [\App\Http\Controllers\DashboardPageController::class, 'workers'])->name('workers');
        Route::post('/save-sign', [\App\Http\Controllers\DashboardPageController::class, 'saveSign'])->name('save.sign');
    });
    Route::prefix('ustawienia')->group(function (){
        Route::post('/submit-visual', [\App\Http\Controllers\DashboardPageController::class, 'submitVisual'])->name('submit.visual');
    });
    Route::prefix('ustawienia')->group(function (){
        Route::post('/rodo-reset', [\App\Http\Controllers\DashboardPageController::class, 'rodoReset'])->name('rodo.reset');
    });

    if(Schema::hasTable('news')){
        Route::get('/news/{slug}', [\App\Http\Controllers\NewsPageController::class, 'index'])->name('news');
    }
});

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
//Route::get('/functions/usrpin', function () {
//    return view('ustawienia.usrpin');
//})->middleware(['auth']);
Route::get('/functions/rodoreset', function () {
    return view('ustawienia.rodoreset');
})->middleware(['auth']);

Route::get('/functions/document_kartaklienta_edit', function () {
    return view('ustawienia.document_kartaklienta_edit');
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


