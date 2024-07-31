<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use \App\Http\Controllers\CategoriesController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/categories', [CategoriesController::class, "index"]
)->name('categories.index');

// Route pour afficher le formulaire de création
Route::get('/create-categories', [CategoriesController::class, "create"]
)->name('categories.create');

// Route pour gérer la soumission du formulaire de création
Route::post('/create-categories',[CategoriesController::class, "store"]

)->name('categories.store');

Route::get('/categories/{id}/show',[CategoriesController::class, "show"]

)->name('categories.show');

Route::get('/categories/{id}/edit',[CategoriesController::class, "edit"]

)->name('categories.edit');

Route::put('/categories/{id}/update', [CategoriesController::class, 'update'])->name('categories.update');


Route::delete('/categories/{id}/delete', [CategoriesController::class, 'destroy'])->name('categories.destroy');




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
