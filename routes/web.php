<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\CoursController;
use App\Http\Controllers\JournalController;
use App\Http\Controllers\MatiereController;
use App\Http\Controllers\EtudiantsController;
use App\Http\Controllers\ParcouresController;
use App\Http\Controllers\EnseignantController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[MainController::class,'home'])->name('home');
Route::get('/schedule/{mention}/{annee}',[MainController::class,'schedule'])->name('schedule')->middleware('Admin');
Route::get('/presence/{semaine}/{parcoure}/{anneedetude}',[MainController::class,'presence'])->name('presence')->middleware('Admin');
Route::resource('etudiants', EtudiantsController::class)->middleware('Admin');;
Route::resource('enseignants', EnseignantController::class)->middleware('Admin');
Route::resource('matieres', MatiereController::class)->middleware('Admin');
Route::resource('parcoure', ParcouresController::class)->middleware('Admin');
Route::resource('cours', CoursController::class)->middleware('Admin');
Route::resource('journals', JournalController::class)->middleware('Admin');
Auth::routes();
