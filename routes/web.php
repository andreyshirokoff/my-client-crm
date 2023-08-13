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
    //Route::get('/document_search', [\App\Http\Controllers\DashboardPageController::class, 'documentSearch'])->name('documentSearch');
    Route::get('/doc-base', function (){return view('document_search');})->name('documentSearch');

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
    Route::prefix('ustawienia')->group(function (){
        Route::post('/send-answers', [\App\Http\Controllers\DashboardPageController::class, 'sendAnswers'])->name('send.answers');
    });
    Route::prefix('ustawienia')->group(function (){
        Route::post('/download-pdf', [\App\Http\Controllers\PdfController::class, 'index'])->name('download.pdf');
    });

    if(Schema::hasTable('news')){
        Route::get('/news/{slug}', [\App\Http\Controllers\NewsPageController::class, 'index'])->name('news');
    }
    Route::prefix('functions')->group(function (){
        Route::post('/treatment-create-add', [\App\Http\Controllers\DashboardPageController::class, 'treatmentCreate'])->name('treatment.create.add');
    });

    Route::get('/clients', function (){
        return view('client_page');
    })->name('clients');

    Route::get('/add-procedure', function (){
        return view('add_procedure');
    })->name('dobav.zabiegKlient');

    Route::get('/old-client-cards', function (){
        return view('old_client_cards');
    })->name('old.kartaKlient');

    Route::get('/add-answer-to-karta', function (){
        return view('add_answer_to_karta');
    })->name('add.answerToKarta');

    Route::get('/edit-procedure', function (){
        return view('edit_procedure');
    })->name('edit.procedure');

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
Route::get('/creators/question-array', function () {
    return view('question_array');
})->middleware(['auth']);

Route::get('/functions/treatment_template', function () {
    return view('ustawienia.treatment_template');
})->middleware(['auth']);
Route::get('/functions/treatment_create', function () {
    return view('ustawienia.treatment_create');
})->middleware(['auth']);
Route::get('/functions/treatment_question/', function () {
    return view('ustawienia.treatment_question');
})->middleware(['auth', 'check.getParameters'])
    ->name('treatment.question');
Route::get('/functions/product-create', function () {
    return view('ustawienia.product_create');
})->middleware(['auth']);
Route::get('/functions/product-edit', function () {
    return view('ustawienia.product_edit');
})->middleware(['auth']);
Route::get('/functions/product-delete', function () {
    return view('ustawienia.product_delete');
})->middleware(['auth']);
Route::get('/functions/card-client-delete', function () {
    return view('ustawienia.card_client_delete');
})->middleware(['auth']);
Route::get('/test_pdf', function () {
    return view('test_pdf');
})->middleware(['auth']);


