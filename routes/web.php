<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticateController;
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

Route::get('/lista', function () {
    return view('lista');
});

Route::get('/login', [AuthenticateController::class, 'showLoginForm']);
Route::post('/login', [AuthenticateController::class, 'loginUser']);
Route::post('/register', [AuthenticateController::class, 'registerUser']);

Route::middleware(['auth.check'])->group(function () {
    Route::get('/area-logada', [AuthenticateController::class, 'areaLogada']);
});
