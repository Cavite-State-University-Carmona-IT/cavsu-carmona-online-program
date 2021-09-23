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

Route::get('/', function () {
    if(auth()->check()) {
        return redirect('/home');
    }
    else {
        return redirect('/guest');
    }
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


// GUEST

// LIVEWIRE
Route::group(['namespace' => 'App\Http\Livewire'], function() {
    Route::get('guest', Participant\HomeGuest::class)->name('guest');
});
