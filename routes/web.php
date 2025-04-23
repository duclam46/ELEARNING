<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard', function () {
    return view('admin.dashboard.index');
});
Route::get('/client', function () {
    return view('client.layouts.app');
});

Auth::routes();

Route::resource('users', UserController::class);
