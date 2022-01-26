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
    Route::get('extension-service/{extension_service_link_name}/', Participant\ExtensionService\ExtensionServiceIndex::class);
    Route::get('extension-service/{extension_service_link_name}/{field_of_interest_link_name}', Participant\ExtensionService\ExtensionServiceIndex::class);
    Route::get('webinars/search/', Participant\Search\SearchPage::class)->name('webinarsearch');
    Route::get('webinar/{title}', Participant\Webinar\WebinarIndex::class)->name('webinar');

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
                        Route::get('webinar', Webinar\WebinarIndex::class)->name('webinar');
                        Route::get('reports', Report\ReportIndex::class)->name('report');
                        Route::get('settings/', Settings\SettingsIndex::class)->name('settings');
                        Route::group(['prefix' => 'settings'], function() {
                            Route::get('roles-and-permissions', Settings\SettingsIndex::class)->name('roles-and-permissions');
                            Route::get('ecertificate-templates', Settings\SettingsIndex::class)->name('ecertificate-templates');
                            Route::get('company-information', Settings\SettingsIndex::class)->name('company-information');
                        });

                        // Webinar details
                        Route::get('webinar/{id}', Webinar\WebinarDetails::class);
                        Route::get('new-webinar/', Webinar\WebinarCreate::class);

                    });
                });
            });
        });
    });

});


Route::group(['namespace' => 'App\Http\Controllers'], function() {

    // AUTH USER;
    Route::group(['middleware' => 'auth'], function () {
        Route::get('generate/e-certificate/{webinar_id}/{user_id}', 'Generate\EcertificateGenerate@index');

        // PROGRAM COORDINATOR
        Route::group(['middleware' => ['role:program_coordinator']], function() {
            // Route::get('program-coordinator/reports','ProgramCoordinator\Reports\ReportController@index')->name('program-coordinator.report');
            // Route::get('program-coordinator/reports/registered-users', 'ProgramCoordinator\Reports\ReportController@download_report_registeredUser_evaluation');
            // Route::get('program-coordinator/reports/active-inactive-users', 'ProgramCoordinator\Reports\ReportController@download_report_userActivity_evaluation');
            // Route::get('program-coordinator/reports/completed-evaluation', 'ProgramCoordinator\Reports\ReportController@download_completed_evaluation');
            
            // Ecertificate Template
            Route::get('program-coordinator/ecertificate-template/{id}',  'ProgramCoordinator\Ecertificate\TemplateController@view_format');
        });
    });

    // FETCH DATA
    Route::get('fetch_published_webinars/{id}', 'FetchController@getPublishedWebinarsFromExtensionServiceID');
    Route::get('fetch_extension_services/', 'FetchController@getExtensionServices');

});


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
