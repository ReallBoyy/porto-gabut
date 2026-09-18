<?php

use App\Http\Controllers\LandingController;
use Illuminate\Support\Facades\Route;

// Single-page portfolio. All content is served from config/portfolio.php.
Route::get('/', LandingController::class)->name('landing');