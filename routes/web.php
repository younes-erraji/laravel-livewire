<?php

use App\Http\Controllers\CountriesController;
use Illuminate\Support\Facades\Route;

Route::get('/', [CountriesController::class, 'index']);
Route::get('/countries', [CountriesController::class, 'countries']);
