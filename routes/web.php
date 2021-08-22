<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DivisionController;
use App\Http\Controllers\PeopleController;
use App\Http\Controllers\VaccinationCanterController;
use App\Http\Controllers\VaccineController;
use Database\Factories\VaccinationCanterFactory;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::middleware(['auth','verified'])->group(function(){
 Route::get('/', [DashboardController::class,'index'])->name('dashboard');
 Route::resource( '/categories',CategoryController::class);
 Route::resource( '/division',DivisionController::class);
 Route::post( '/division-enable-disable/{id}',[DivisionController::class,'enableDisable'])->name('division_enable_disable');

 Route::resource('/people', PeopleController::class);
 Route::post( '/people-register-enable-disable/{id}',[PeopleController::class,'enableDisable'])->name('people_register_enable_disable');

 Route::resource('/vaccines', VaccineController::class);
 Route::resource('/vaccination-centers', VaccinationCanterController::class);
});

require __DIR__.'/auth.php';
