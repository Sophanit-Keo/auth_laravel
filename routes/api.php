<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\CategoryController;
use App\Http\Controllers\api\AuthController;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('category', [CategoryController::class, 'store']);
});
Route::get('/test-db', function () {
    try {
        $dbName = \Illuminate\Support\Facades\DB::connection()->getDatabaseName();
        return "✅ Connected to: <strong>{$dbName}</strong>";
    } catch (\Exception $e) {
        return "❌ Error: " . $e->getMessage();
    }
});
