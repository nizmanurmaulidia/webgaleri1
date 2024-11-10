<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//route untuk menampilkan dashboard admin
Route::get('/admin', function () {
    return view('admin.dashboard.index', [
        'title' => 'Dashboard', 
    ]);
});

//rout untuk menampilkan halaman manejemen admin
Route::get('/users', [UserController::class, 'index']);
