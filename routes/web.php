<?php

use Illuminate\Support\Facades\Route;
use Apps\Http\Controllers\ItemController;

Route::get('/', function () {
    return view('welcome');
Route::get('/items'. [ItemController::class, 'index']);
});
