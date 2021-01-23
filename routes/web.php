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
Route::get('/fpack', 'App\Http\Controllers\packController@feshpack');
Route::post('/acity', 'App\Http\Controllers\CityController@addcity');
Route::post('/apack', 'App\Http\Controllers\packController@addpack');
Route::post('user/profileinfo/{id}', 'App\Http\Controllers\profileController@userupdate');
Route::post('user/profileimage', 'App\Http\Controllers\profileController@profileimage');


Route::get('chat/{id}','App\Http\Controllers\chatController@chatWhith')->name('chat');
Route::get('conversations','App\Http\Controllers\chatController@index')->name('conversations');
//Route::get('conversations','App\Http\Controllers\chatController@index');
Route::get('conversations/{id}','App\Http\Controllers\chatController@showMessages');
Route::post('chat/{id}','App\Http\Controllers\chatController@store');

Route::get('settingup','App\Http\Controllers\settingsController@imageUpload')->name('chat');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');