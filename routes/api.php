<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\UserController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('/inscricao', [SubscriptionController::class, 'create']);
Route::get('/inscricoes', [SubscriptionController::class, 'list']);
Route::match(['get', 'post'], '/enviar-email/{id}', [SubscriptionController::class, 'sendHelloEmail']);
Route::post('/register', [UserController::class, 'register']);
