<?php

use App\Http\Controllers\Api\CategoryController as ApiCategoryController;
use App\Http\Controllers\Api\VerificationController;
use App\Http\Controllers\CategoryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/test', function(){
    return 'I am from backend ok';
});
Route::post('/verify',[VerificationController::class,'verify']);
Route::get('/categories',[ApiCategoryController::class,'getCategories']);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
