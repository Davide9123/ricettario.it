<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\UserController;
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
//! Rotta per la home
Route::get('/',[HomeController::class,'index'])->name('welcome');

//! Rotte per form di contatto
Route::get('/contact',[HomeController::class, 'contact'])->name('contact');
Route::post('/contact/submit',[HomeController::class, 'contactSubmit'])->name('contact.submit');

//! Rotta per le ricette
Route::get('/recipe',[RecipeController::class, 'recipes'])->name('recipe_index');
Route::get('/recipe/form',[RecipeController::class,'recipe_form'])->name('recipe_form');
Route::post('/recipe/submit',[RecipeController::class, 'recipe_submit'])->name('recipe_submit');
Route::get('/recipe/details/{recipe}',[RecipeController::class,'recipe_details'])->name('recipe_details');

//! Rotta per la vista utente
Route::get('/profile',[UserController::class, 'userProfile'])->name('profile');