<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home;

Route::get('/', [Home::class, 'index']);
