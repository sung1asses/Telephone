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
	
	Route::middleware(['isAdmin'])->group(function () {

		Route::get('/numbers/export', 'AdminController@export')->name('admin.numbers.export');

		// Operators
		Route::get('/redactors', 'AdminController@listRedactor')->name('admin.redactor.list');
		Route::post('/redactors', 'AdminController@createRedactor')->name('admin.redactor.create');
		Route::get('/redactors/{id}/delete', 'AdminController@deleteRedactor')->name('admin.redactor.delete');

  	});

	Route::get('/numbers', 'RedactorController@listNumbers')->name('redactor.numbers.list');
	Route::post('/numbers', 'RedactorController@createNumbers')->name('redactor.numbers.create');
	Route::get('/numbers/{id}/delete', 'RedactorController@deleteNumbers')->name('redactor.numbers.delete');

	Route::get('/institutes', 'RedactorController@listInstitutes')->name('redactor.institutes.list');
	Route::post('/institutes', 'RedactorController@createInstitutes')->name('redactor.institutes.create');
	Route::get('/institutes/{id}/delete', 'RedactorController@deleteInstitutes')->name('redactor.institutes.delete');
});

Route::get('/', 'GuestController@listNumbers')->name('numbers.list');
Route::post('/', 'GuestController@findNumbers')->name('numbers.find');