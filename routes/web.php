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

        Route::get('/program-coordinator', function () {
            return redirect()->route('program-coordinator.dashboard');
        });

        Route::group(['namespace' => 'ProgramCoordinator'], function() {
            Route::group(['prefix' => 'program-coordinator'], function() {

                Route::name('program-coordinator.')->group( function () {

                    Route::group(['middleware' => ['role:program_coordinator']], function() {

                        Route::get('dashboard', Dashboard\DashboardIndex::class)->name('dashboard');
                        Route::get('collection', Collection\CollectionIndex::class)->name('collection');
                        Route::get('webinar', Webinar\WebinarIndex::class)->name('webinar');
                        Route::get('report', Report\ReportIndex::class)->name('report');

                    });
                });
            });
        });
    });

});


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
