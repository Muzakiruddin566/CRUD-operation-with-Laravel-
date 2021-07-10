<?php

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
    return view('welcome');
});
Route::get('/form', function () {
    return view('form');
})->name('form');
Route::post('/formsubmited', 'Formcontroller@store')->name('form1');
Route::get('/Data/', 'Formcontroller@show')->name('seedata');
Route::get('/delete/{id}', 'Formcontroller@destroy');
Route::get('/edit/{id}', 'Formcontroller@edit');
Route::post('update','Formcontroller@update')->name('update');




//Route::get('/form1', function () {
//    $forms = DB::table('forms')->get();
//    //return $tasks;
//    return view('table',compact('forms'));
//})->name('table');

