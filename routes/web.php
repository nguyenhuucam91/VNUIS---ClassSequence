<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

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

Route::get('/test', [BookController::class, 'index']);
Route::get('/test/create', [BookController::class, 'create']);
Route::post('/test', [BookController::class, 'store']);

//FAKE STORE, more details put to the top
Route::get('/test/fake-create', [BookController::class, 'fakeCreate']);
Route::post('/test/fake-store', [BookController::class, 'fakeStore']);

Route::get('/test/{id}/edit', [BookController::class, 'edit']);
Route::post('/test/{id}', [BookController::class, 'update']);
Route::get('/test/{id}/delete', [BookController::class, 'delete']);
