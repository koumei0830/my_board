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

Route::get('/', function () {
    return view('welcome');
});



Route::get('/{thread_id}/comments',[App\Http\Controllers\comeController::class,"getCome"]);

Route::get('/{thread_id}/comment/new',[App\Http\Controllers\comeController::class,"getNewCome"]);

Route::post('/{thread_id}/comment/new',[App\Http\Controllers\comeController::class,"postNewCome"]);

Route::get('/{thread_id}/comment/{id}/delete',[App\Http\Controllers\comeController::class,"getDeleteComeById"]);

Route::post('/{thread_id}/comment/{id}/delete',[App\Http\Controllers\comeController::class,"postDeleteComeById"]);

Route::get('/threads',[App\Http\Controllers\threController::class,"getThread"]);

Route::post('/threads',[App\Http\Controllers\threController::class,"postThread"]);

Route::get('/thread/{id}',[App\Http\Controllers\threController::class,"getThreadById"]);

Route::get('/thread/{id}/delete',[App\Http\Controllers\threController::class,"getDeleteThreadById"]);

Route::post('/thread/{id}/delete',[App\Http\Controllers\threController::class,"postDeleteThreadById"]);
