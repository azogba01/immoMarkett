<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\HomeController ;
use App\Http\Controllers\ProprieteController ;
use App\Http\Controllers\TypeproprietaireController ;
use App\Http\Controllers\VilleController ;
use App\Http\Controllers\CategorieController ;


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
Route::get('/',[FrontController::class, 'accueil']);
Route::get('/agent-grid',[FrontController::class, 'agent_grid']);
Route::get('/agent-single',[FrontController::class, 'agent_single']);
Route::get('/contact',[FrontController::class, 'contact']);
Route::get('/property-grid',[FrontController::class, 'property_grid']);
Route::get('/property-single',[FrontController::class, 'property_single']);
Route::get('/blog-grid',[FrontController::class, 'blog_grid']);
Route::get('/login',[FrontController::class, 'connection']);
Route::get('/inscription',[FrontController::class, 'inscription']);
Route::get('/about',[FrontController::class, 'about']);

Route::get('/createcategorie',[CategorieController::class, 'create']);
Route::get('/edit/{id}',[CategorieController::class, 'edit']);
Route::get('/ categorielist',[CategorieController::class, 'categorie']);
Route::put('/edit{id}/',[CategorieController::class, 'update'])->name('categories.update') ;
Route::post('/createcategorie',[CategorieController::class, 'store'])->name('categories.store');
Route::delete('/delete/{id}/',[CategorieController::class, 'destroy'])->name('categories.delete') ;
Route::delete('/show/{id}/',[CategorieController::class, 'show'])->name('categories.delete') ;


Route::get('/proprietecreate',[ProprieteController::class, 'create'])->name('propriete.create');
Route::post('/proprietecreate',[ProprieteController::class, 'store'])->name('propriete.store');
Route::get('/proprietelist',[ProprieteController::class, 'propriete']);
Route::get('/edit/{id}',[ProprieteController::class, 'edit']);
Route::put('/edit{id}/',[ProprieteController::class, 'update'])->name('propriete.update') ;
Route::delete('/delete/{id}/',[ProprieteController::class, 'destroy'])->name('propriete.delete') ;


Route::get('/typeproprietairecreate',[TypeproprietaireController::class, 'create'])->name('typeproprietaires.create');
Route::post('/typeproprietairecreate',[TypeproprietaireController::class, 'store'])->name('typeproprietaires.store');
Route::get('/typeproprietairelist',[TypeproprietaireController::class, 'typeproprietaire']);
Route::get('/edit/{id}/',[TypeproprietaireController::class, 'edit']);
Route::put('/edit{id}/',[TypeproprietaireController::class, 'update'])->name('typeproprietaires.update') ;
Route::delete('/delete/{id}/',[TypeproprietaireController::class, 'destroy'])->name('typeproprietaires.delete') ;


Route::get('/villecreate',[VilleController::class, 'create']);
Route::get('/edit/{id}',[VilleController::class, 'edit']);
Route::get('/ villelist',[VilleController::class, 'ville']);
Route::put('/edit{id}/',[VilleController::class, 'update'])->name('villes.update') ;
Route::post('/villecreate',[VilleController::class, 'store'])->name('villes.store');
Route::delete('/delete/{id}/',[VilleController::class, 'destroy'])->name('villes.delete') ;
Route::delete('/show/{id}/',[VilleController::class, 'show'])->name('villes.delete') ;
 
 
Route::get('/dashboard',[FrontController::class, 'admin']);
 
Auth::routes();

// Route::get('/home', [App\Http\Controllers\FrontController::class, 'accueil'])->name('home');
