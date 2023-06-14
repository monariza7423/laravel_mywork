<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\OtherController;

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
    return view('top');
});

Route::get('/', [OtherController::class, 'index'])->name('home');


Route::get('/about', function(){
    return view('about');
});

Route::get('/work', function(){
    return view('work');
});

Route::prefix('news')
->controller(NewsController::class)
->group(function(){
    Route::get('/', 'index')->name('news.index');
    Route::get('/create', 'create')->name('news.create');
    Route::post('/', 'store')->name('news.store');
    Route::get('/{id}', 'show')->name('news.show');
});

Route::get('/contacts', [ContactController::class, 'index'])->name('contacts.index');
Route::post('/contacts/confirm', [ContactController::class, 'confirm'])->name('contacts.confirm');
Route::post('/contacts/thanks', [ContactController::class, 'send'])->name('contacts.send');