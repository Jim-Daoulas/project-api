<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return response()->json(['message' => 'hello user']);
});

Route::prefix('auth')->middleware("setAuthRole:2")->group(base_path('routes/auth.php'));

Route::prefix("user")
    ->group(function() {
        Route::get("me", [UserController::class, 'me']);
        Route::get("token", [UserController::class, 'token']);
        Route::delete("revoke-all-tokens", [UserController::class, 'revokeAllTokens']);
    });