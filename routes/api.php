<?php

use Illuminate\Http\Request;
// use Illuminate\Routing\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('import_excel', 'ImportExcelController@index');   

Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function () {
    Route::resource('/users', 'UsersController', ['except' => ['show', 'store']]);
    // Route::post('/save', 'UsersController@save');
});
// Route::post('/save', 'UsersController@save');

Route::group(['middleware' => ['web']], function () {
    //routes here
    Route::get('/import_excel', 'ImportExcelController@index');
    Route::post('/import_excel/import', 'ImportExcelController@import');
});
Route::post('import', 'ImportExcelController@import')->name('import');
