<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApprenantController;

Route::get('/', function () {
    return view('welcome');
});
route::get('/elise',[ApprenantController::class,'index'])->name('Apprenant.index');
