<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\USERSController;



Route::get('/', function () {
    return view('landing');
});
