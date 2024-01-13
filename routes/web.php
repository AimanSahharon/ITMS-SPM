<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('bunit', \App\Http\Controllers\BunitController::class);
Route::resource('developer', \App\Http\Controllers\DeveloperController::class);
Route::resource('project', \App\Http\Controllers\ProjectController::class);

Route::post('addToDeveloper/{project}', [ProjectController::class, 'addToDeveloper'])->name('addToDeveloper');
Route::get('dropDeveloper/{project}/{developer}', [ProjectController::class, 'dropDeveloper'])->name('dropDeveloper');
Route::get('dropAllDevelopers/{project}', [ProjectController::class, 'dropAllDevelopers'])->name('dropAllDevelopers');
Route::get('dropDeveloper/{project_id}/{developer_id}', [ProjectController::class, 'dropDeveloper'])
    ->name('dropDeveloper');
