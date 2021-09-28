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

        // PROGRAM COORDINATOR

        Route::group(['namespace' => 'ProgramCoordinator'], function() {
            Route::group(['prefix' => 'program-coordinator'], function() {



                Route::name('program-coordinator.')->group( function () {

                    Route::group(['middleware' => ['role:program_coordinator']], function() {

                        Route::get('dashboard', Dashboard::class)->name('dashboard');
                        Route::get('collection', Dashboard::class)->name('collection');
                        Route::get('report', Dashboard::class)->name('report');

                    });
                });
            });
        });
    });

});


Route::get('program-coordinator', [App\Http\Controllers\Auth\ProgramCoordinatorLoginController::class, 'index'])->name('program-coordinator.login-custom');
Route::post('program-coordinator/login', [App\Http\Controllers\Auth\ProgramCoordinatorLoginController::class, 'login'])->name('program-coordinator.login-custom');
Route::get('program-coordinator/logout', [App\Http\Controllers\Auth\ProgramCoordinatorLoginController::class, 'logout'])->name('program-coordinator.logout');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
