<?php

use App\Http\Controllers\IceController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [IceController::class, 'create']);
Route::get('tables', [IceController::class, 'index']);
Route::post('icecream', [IceController::class, 'store']);
Route::delete('icecream/{id}', [IceController::class, 'destroy']);
