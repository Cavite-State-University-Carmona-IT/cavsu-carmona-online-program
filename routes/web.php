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


// LIVEWIRE
Route::group(['namespace' => 'App\Http\Livewire'], function() {

    Route::get('/', Participant\Home::class);

    // AUTH USER;
    Route::group(['middleware' => 'auth'], function () {

    });

});




//

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
