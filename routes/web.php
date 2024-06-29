<?php

use Illuminate\Support\Facades\Route;

// Admin Dashboard Routes
// Route::get('/dashboard' , )
Route::get('/', function () {
    return view('welcome');
});


Require __DIR__ . '/admin/admin.php';
Require __DIR__ . '/front/front.php';