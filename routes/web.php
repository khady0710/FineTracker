<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use \App\Http\Controllers\CategoriesController;
use \App\Http\Controllers\ExpensesController;
use \App\Http\Controllers\RevenuesController;
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

Route::middleware('auth')->group(function () {

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


    // Route pour les revenues
    Route::get('/revenues', [RevenuesController::class, "index"]
    )->name('revenues.index');

    // Route pour afficher le formulaire de création
    Route::get('/create-revenues', [RevenuesController::class, "create"]
    )->name('revenues.create');

    // Route pour gérer la soumission du formulaire de création
    Route::post('/create-revenues',[RevenuesController::class, "store"]

    )->name('revenues.store');

    Route::get('/revenues/{id}/show',[RevenuesController::class, "show"]

    )->name('revenues.show');

    Route::get('/revenues/{id}/edit',[RevenuesController::class, "edit"]

    )->name('revenues.edit');

    Route::put('/revenues/{id}/update', [RevenuesController::class, 'update'])->name('revenues.update');


    Route::delete('/revenues/{id}/delete', [RevenuesController::class, 'destroy'])->name('revenues.destroy');

// Route pour les dépenses
    Route::get('/expenses', [ExpensesController::class, "index"]
    )->name('expenses.index');

    // Route pour afficher le formulaire de création
    Route::get('/create-expenses', [ExpensesController::class, "create"]
    )->name('expenses.create');

    // Route pour gérer la soumission du formulaire de création
    Route::post('/create-expenses',[ExpensesController::class, "store"]

    )->name('expenses.store');

    Route::get('/expenses/{id}/show',[ExpensesController::class, "show"]

    )->name('expenses.show');

    Route::get('/expenses/{id}/edit',[ExpensesController::class, "edit"]

    )->name('expenses.edit');

    Route::put('/expenses/{id}/update', [ExpensesController::class, 'update'])->name('expenses.update');


    Route::delete('/expenses/{id}/delete', [ExpensesController::class, 'destroy'])->name('expenses.destroy');

    Route::get('/', [ExpensesController::class, 'dashboard'])->middleware('auth');

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
