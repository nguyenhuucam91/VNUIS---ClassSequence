<?php

use App\Http\Controllers\TestController;
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

Route::get('/test', [TestController::class, 'index']);
Route::get('/test/create', [TestController::class, 'create']);
Route::post('/test', [TestController::class, 'store']);
Route::get('/test/{id}/edit', [TestController::class, 'edit']);
Route::post('/test/{id}', [TestController::class, 'update']);
Route::get('/test/{id}/delete', [TestController::class, 'delete']);
