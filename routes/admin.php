<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return response()->json(['message' => 'hello admin']);
});

Route::prefix('auth')->middleware("setAuthRole:1")->group(base_path('routes/auth.php'));

Route::middleware(['auth:sanctum', 'checkRole:admin'])->group(function(){

});