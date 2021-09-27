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


// LIVEWIRE
Route::group(['namespace' => 'App\Http\Livewire'], function() {

    // GUEST
    Route::get('guest', Participant\HomeGuest\HomeGuest::class)->name('guest');

    // AUTH USER
    Route::group(['auth:sanctum', 'verified'], function () {
        Route::get('home', Participant\HomeUser\HomeUser::class)->name('home');
    });

});




//

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
