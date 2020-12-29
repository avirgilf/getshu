<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\profileController;
use App\Http\Controllers\searchController;

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
    return view('landing');
});

Route::get('view-profile/{id}',[profileController::class,'showProfile']);
Route::post('search-result',[searchController::class,'search'])->name('search');
Route::get('/fcurrency', 'App\Http\Controllers\CurrencyController@feshcurrency');
Route::get('/fcountry', 'App\Http\Controllers\CountryController@feshcountry');
Route::post('/acoun', 'App\Http\Controllers\CountryController@addcountry');
Route::get('/flanguage', 'App\Http\Controllers\LanguageController@feshlanguage');
Route::post('/alang', 'App\Http\Controllers\LanguageController@addlanguage');
Route::get('/fcity', 'App\Http\Controllers\CityController@feshcity');
Route::post('/acity', 'App\Http\Controllers\CityController@addcity');


Route::get('chat/{id}',[chatController::class,'chatWhith'])->name('chat');
Route::get('messages',[chatController::class,'showMessages']);
Route::post('chat/{id}',[chatController::class,'store']);


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');