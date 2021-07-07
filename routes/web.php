<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\ClientController;

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
    return view('file-import-animal');
});

Route::get('file-import-export-animal', [AnimalController::class, 'fileImportExport']);
Route::post('file-import-animal', [AnimalController::class, 'fileImport'])->name('file-import-animal');
Route::get('file-export-animal', [AnimalController::class, 'fileExport'])->name('file-export-animal');

Route::get('file-import-export-client', [ClientController::class, 'fileImportExport']);
Route::post('file-import-client', [ClientController::class, 'fileImport'])->name('file-import-client');
Route::get('file-export-client', [ClientController::class, 'fileExport'])->name('file-export-client');

