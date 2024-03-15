<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\HomeController ;
use App\Http\Controllers\ProprieteController ;
use App\Http\Controllers\TypebailleurController;
use App\Http\Controllers\VilleController ;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\TypeabonnementController;
use App\Http\Controllers\BailleurController;
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
Route::get('/dashboard',[FrontController::class, 'admin']);
// Route::get('/dashboard',[FrontController::class, 'admin']);

Route::get('/createcategorie',[CategorieController::class, 'create']);
Route::get('/categoryedit/{id}/',[CategorieController::class,'edit']);
Route::put('/categoryedit/{id}/',[CategorieController::class, 'update'])->name('categories.update');
Route::get('/categorielist',[CategorieController::class, 'categorie'])->name('categorie.list');
Route::post('/createcategorie',[CategorieController::class, 'store'])->name('categories.store');
Route::delete('/categoriedelete/{id}/',[CategorieController::class, 'destroy'])->name('categories.delete') ;
Route::delete('/categorieshow/{id}/',[CategorieController::class, 'show'])->name('categories.show') ;


Route::get('/proprietecreate',[ProprieteController::class, 'create'])->name('propriete.create');
Route::post('/proprietecreate',[ProprieteController::class, 'store'])->name('propriete.store');
Route::get('/proprietelist',[ProprieteController::class, 'propriete']);
Route::get('/proprietedit/{id}',[ProprieteController::class, 'edit']);
Route::put('/proprietedit/{id}/',[ProprieteController::class, 'update'])->name('propriete.update') ;
Route::delete('/proprietedelete/{id}/',[ProprieteController::class, 'destroy'])->name('propriete.delete') ;


Route::get('/typebailleurcreate',[TypebailleurController::class, 'create'])->name('typebailleurs.create');
Route::post('/typebailleurcreate',[TypebailleurController::class, 'store'])->name('typebailleurs.store');
Route::get('/typebailleurlist',[TypebailleurController::class, 'typebailleur']);
Route::get('/typebailleurdit/{id}/',[TypebailleurController::class, 'edit']);
Route::put('/typebailleurdit/{id}/',[TypebailleurController::class, 'update'])->name('typebailleurs.update') ;
Route::delete('/typebailleurdelete/{id}/',[TypebailleurController::class, 'destroy'])->name('typebailleurs.delete') ;

Route::get('/bailleurcreate',[BailleurController::class, 'create']);
Route::post('/bailleurcreate',[BailleurController::class, 'store'])->name('bailleur.store');
Route::get('/bailleurlist',[BailleurController::class, 'bailleur']);
Route::get('/bailleuredit/{id}/',[BailleurController::class, 'edit']);
Route::put('/bailleuredit/{id}/',[BailleurController::class, 'update'])->name('bailleurs.update') ;
Route::get('/bailleurdelete/{id}/',[BailleurController::class, 'destroy'])->name('bailleurs.delete') ;
Route::delete('/bailleurshow/{id}/',[BailleurController::class, 'show'])->name('bailleurs.delete') ;


 
Route::get('/villecreate',[VilleController::class, 'create'])->name('villes.create');
Route::post('/villecreate',[VilleController::class, 'store'])->name('villes.store');
Route::get('/ villelist',[VilleController::class, 'ville']);
Route::get('/villedit/{id}/',[VilleController::class, 'edit']);
Route::put('/villedit/{id}/',[VilleController::class, 'update'])->name('villes.update') ;
Route::get('/villedelete/{id}/',[VilleController::class, 'destroy'])->name('villes.delete') ;
Route::delete('/villeshow/{id}/',[VilleController::class, 'show'])->name('villes.delete') ;

Route::get('/typeabonnementcreate',[TypeabonnementController::class, 'create'])->name('typeabonnements.create');
Route::post('/typeabonnementcreate',[TypeabonnementController::class, 'store'])->name('typeabonnements.store');
Route::get('/ typeabonnementlist',[TypeabonnementController::class, 'typeabonnement']);
Route::get('/typeabonnementdit/{id}/',[TypeabonnementController::class, 'edit']);
Route::put('/typeabonnementdit/{id}/',[TypeabonnementController::class, 'update'])->name('typeabonnements.update') ;
Route::get('/typeabonnementdelete/{id}/',[TypeabonnementController::class, 'destroy'])->name('typeabonnements.delete') ;
Route::delete('/typeabonnementshow/{id}/',[TypeabonnementController::class, 'show'])->name('typeabonnements.delete') ;
 
Auth::routes();

// Route::get('/home', [App\Http\Controllers\FrontController::class, 'accueil'])->name('home');
 