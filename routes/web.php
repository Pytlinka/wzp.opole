<?php

use Illuminate\Support\Facades\Route;


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

//Route::get('/', function () {
//    return view('welcome');
//});


Route::get('/', function () {
    return view('main_1');
});

Route::get('/', [App\Http\Controllers\NewsController::class, 'index'])->name('main_1');

Route::get('/test', function () {
    return view('test_index');
});

Route::get('/contact', function () {
    return view('contact_1');
});

/*Route::get('/2', function () {
    return view('main_2');
});*/
Route::get('/build', function () {
    return view('workshop');
});

Route::get('/pdf', function () {
    return view('pdf_display');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
