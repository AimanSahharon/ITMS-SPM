<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\ProjectController;

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
//Route::patch('/projects/{project}', 'ProjectController@update')->name('project.update');

Route::post('addToDeveloper/{project}', [\App\Http\Controllers\ProjectController::class, 'addToDeveloper'])->name('addToDeveloper');
Route::get('dropDeveloper/{project}/{developer}', [\App\Http\Controllers\ProjectController::class, 'dropDeveloper'])->name('dropDeveloper');
Route::get('dropAllDevelopers/{project}', [\App\Http\Controllers\ProjectController::class, 'dropAllDevelopers'])->name('dropAllDevelopers');
Route::get('dropDeveloper/{project_id}/{developer_id}', [\App\Http\Controllers\ProjectController::class, 'dropDeveloper'])
    ->name('dropDeveloper');

//Route::get('/projects/{project}/progress', [\App\Http\Controllers\ProjectController::class, 'progress'])->name('project.progress');
//Route::post('/project/{project}/progress', [\App\Http\Controllers\ProjectController::class, 'storeProgress'])->name('project.storeProgress');
//Route::post('/project/{project}/progress', 'ProjectController@storeProgress')->name('project.storeProgress');


Route::post('addToLeadDeveloper/{project}', [\App\Http\Controllers\ProjectController::class, 'addToLeadDeveloper'])->name('addToLeadDeveloper');
Route::get('dropLeadDeveloper/{project_id}/{developer_id}', [\App\Http\Controllers\ProjectController::class, 'dropLeadDeveloper'])
    ->name('dropLeadDeveloper');

Route::post('addToBunit/{project}', [\App\Http\Controllers\ProjectController::class, 'addToBunit'])->name('addToBunit');
Route::get('dropBunit/{project_id}/{bunit_id}', [\App\Http\Controllers\ProjectController::class, 'dropBunit'])
    ->name('dropBunit');

Route::get('/projects/{project}/progress', [\App\Http\Controllers\ProjectController::class, 'progress'])->name('project.progress');
Route::post('/projects/{project}/progress', [\App\Http\Controllers\ProjectController::class, 'storeProgress'])->name('project.storeProgress');

Route::get('project/{project}/progress/{progress}', [\App\Http\Controllers\ProjectController::class, 'editProgress'])->name('project.editProgress');
Route::delete('/project/{project}/progress/{progress}', [\App\Http\Controllers\ProjectController::class, 'deleteProgress'])->name('project.deleteProgress');
Route::patch('/project/{project}/progress/{progress}', [\App\Http\Controllers\ProjectController::class, 'updateProgress'])->name('project.updateProgress');
