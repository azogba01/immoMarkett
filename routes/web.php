<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\HomeController ;
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
Route::get('/editecategorie',[CategorieController::class, 'edit']);
Route::get('/edit/{id}',[CategorieController::class, 'edit']);
Route::get('/ categorielist',[CategorieController::class, 'categorie']);
Route::post('/edit{id}',[CategorieController::class, 'update']) ;

Route::post('/createcategorie',[CategorieController::class, 'store'])->name('categories.store');;
 
Route::get('/dashboard',[FrontController::class, 'admin']);
 
Auth::routes();

// Route::get('/home', [App\Http\Controllers\FrontController::class, 'accueil'])->name('home');
