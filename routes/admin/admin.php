<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SettingsController;
use Illuminate\Support\Facades\Route;

Route::get('/',[HomeController::class,"index"])->name('dashboard');

Route::resource('/dashboard/settings' , SettingsController::class);
?>