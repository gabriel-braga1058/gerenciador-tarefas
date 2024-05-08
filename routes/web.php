<?php

use App\Http\Controllers\Main;
use Illuminate\Support\Facades\Route;


Route::get('/main', [Main::class, 'index']);