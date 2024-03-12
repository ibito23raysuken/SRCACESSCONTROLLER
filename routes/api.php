<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\EtudiantApiController;
use App\Http\Controllers\Api\EnseignantApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/enseignant/login',[EnseignantApiController::class,'login']);
Route::get('/etudiant',[EtudiantApiController::class,'index']);
Route::post('/etudiant',[EtudiantApiController::class,'store']);
Route::get('/etudiantliste',[EtudiantApiController::class,'indexlisteetudiant']);
Route::post('/postetudiant',[EtudiantApiController::class,'postpresence']);
