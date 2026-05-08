<?php

use Illuminate\Http\Request;
use App\Http\Controllers\ItemController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

Route::get('/contoh', function () {
    return response()->json([
        'Nama' => 'Pares',
        'Nim' => '60200124069',
        'kelas' => 'A'
    ]);
});
Route::apiResource('categories', CategoryController::class);
Route::apiResource('items', ItemController::class);
