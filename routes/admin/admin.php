<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/Dashboard',[HomeController::class,"index"])->name('dashboard');

?>