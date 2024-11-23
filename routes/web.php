<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\AdminController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get("/",[LandingPageController::class,"index"])->name("home");

Route::get("/biodata", [GameController::class,"biodata"])->name("biodata");
Route::post("/biodata/store", [GameController::class,"biodata_store"])->name("biodata.store");

Route::get("/survey-pretest", [GameController::class,"preTest"])->name("pretest");
Route::post("/survey-pretest/store", [GameController::class,"storePreTest"])->name('pretest.store');

Route::get("/login", [AdminController::class,"showLoginForm"])->name("login");