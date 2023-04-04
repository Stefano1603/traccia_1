<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MapController;
use App\Http\Controllers\ComuniController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ContactController;

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

Route::get('/', [PublicController::class , 'home'])->name('home');

Route::middleware(['auth'])->group(function(){


Route::get('/comuni/create', [ComuniController::class , 'create'])->name('comuni.create');
Route::post('/comuni/create', [ComuniController::class , 'store'])->name('comuni.store');



Route::get('google-autocomplete', [GoogleController::class, 'index'])->name('googleAutocomplete');

// Route::get('/', [MapController::class, 'index']);

});

