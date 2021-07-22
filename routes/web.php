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

//Route::get('/', 'ExportExcelController@index');

Route::get('/', function () {
    return redirect('/employes');
});

Route::prefix('/employes')->group(function () {
    Route::get('/', 'EmployesController@index');

    Route::get('/edit/{id}', 'EmployesController@edit');
    Route::any('/store/{id}', 'EmployesController@store');

    Route::get('/destroy/{id}', 'EmployesController@destroy');

    Route::get('/{id}', 'DepartamentController@users');
});

Route::get('export', 'ExportExcelController@export')->name('export');
Route::get('importExportView', 'ExportExcelController@importExportView');
Route::post('import', 'ExportExcelController@import')->name('import');
