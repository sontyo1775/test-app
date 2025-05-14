<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerName;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test',[ControllerName::class, 'test'])->name('test');