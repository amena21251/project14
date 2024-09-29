<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\Auth\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route لتسجيل المستخدم الجديد
Route::post('/register', [AuthController::class, 'register']);

// Route لتسجيل الدخول
Route::post('/login', [AuthController::class, 'login']);

// تأمين الـ Routes باستخدام Middleware 'auth:sanctum'
Route::middleware('auth:sanctum')->group(function () {
    // Route للحصول على بيانات المستخدم المسجل
    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    // Route لتسجيل الخروج
    Route::post('/logout', [AuthController::class, 'logout']);
});