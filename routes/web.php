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

Auth::routes([
  'register' => false, // Registration Routes...
  'reset' => false, // Password Reset Routes...
  'verify' => false, // Email Verification Routes...
]);
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::prefix('admin')->middleware(['auth'])->group(function () {
	Route::get('/', 'AdminController@home');
	Route::get('/export/full', 'AdminController@exportFull')->name('admin.numbers.full');

	Route::middleware(['isAdmin'])->group(function () {

		// Redactors
		Route::get('/redactors', 'AdminController@listRedactor')->name('admin.redactor.list');
		Route::post('/redactors', 'AdminController@createRedactor')->name('admin.redactor.create');
		Route::get('/redactors/{id}/delete', 'AdminController@deleteRedactor')->name('admin.redactor.delete');

		// Watchers
		Route::get('/watchers', 'AdminController@listWatcher')->name('admin.watcher.list');
		Route::post('/watchers', 'AdminController@createWatcher')->name('admin.watcher.create');
		Route::get('/watchers/{id}/delete', 'AdminController@deleteWatcher')->name('admin.watcher.delete');

		// logs
		Route::get('/logs', 'AdminController@logs')->name('admin.logs');
  	});

	Route::middleware(['isRedactor'])->group(function () {

		Route::get('/numbers', 'RedactorController@listNumbers')->name('redactor.numbers.list');
		Route::post('/numbers', 'RedactorController@createNumbers')->name('redactor.numbers.create');
		Route::post('/numbers/{id}/update', 'RedactorController@updateNumbers')->name('redactor.numbers.update');
		Route::post('/numbers/{id}/delete', 'RedactorController@deleteNumbers')->name('redactor.numbers.delete');

		Route::get('/institutes', 'RedactorController@listInstitutes')->name('redactor.institutes.list');
		Route::post('/institutes/updatePosition', 'RedactorController@updatePosition');
		Route::post('/institutes', 'RedactorController@createInstitutes')->name('redactor.institutes.create');
		Route::post('/institutes/{id}/update', 'RedactorController@updateInstitutes')->name('redactor.institutes.update');
		Route::post('/institutes/{id}/delete', 'RedactorController@deleteInstitutes')->name('redactor.institutes.delete');

	});
});

Route::get('/', 'GuestController@listNumbers')->name('numbers.list');
Route::get('/export/short', 'GuestController@exportShort')->name('numbers.short');
Route::get('/export/full', 'GuestController@exportFull')->name('numbers.full');