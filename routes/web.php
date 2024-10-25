<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


use App\Http\Controllers\ServiceController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\BizzproController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsletterController;

// Admin routes protected by auth middleware
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });

    // Services routes
    Route::get('/services/create',[ServiceController::class, 'create'])->name('services.create');
    Route::post('/services/store', [ServiceController::class, 'store'])->name('services.store');
    Route::get('/services/index', [ServiceController::class, 'index'])->name('services.index');
    Route::get('/services/{id}/edit', [ServiceController::class, 'edit'])->name('services.edit');
    Route::put('/services/{id}', [ServiceController::class, 'update'])->name('services.update');
    Route::delete('/services/{id}', [ServiceController::class, 'destroy'])->name('services.destroy');

    // Portfolio routes
    Route::get('/portfolios/create', [PortfolioController::class, 'create'])->name('portfolios.create');
    Route::post('/portfolios', [PortfolioController::class, 'store'])->name('portfolios.store');
    Route::get('/portfolios', [PortfolioController::class, 'index'])->name('portfolios.index');
    Route::put('/portfolios/{id}', [PortfolioController::class, 'update'])->name('portfolios.update');
    Route::delete('/portfolios/{id}', [PortfolioController::class, 'destroy'])->name('portfolios.destroy');
    Route::get('/portfolio/{id}', [PortfolioController::class, 'show'])->name('portfolio.details');

    // Teams routes
    Route::get('/teams/create',[TeamController::class, 'create'])->name('teams.create');
    Route::post('/teams/store', [TeamController::class, 'store'])->name('teams.store');
    Route::get('/teams/index', [TeamController::class, 'index'])->name('teams.index');
    Route::put('/teams/{id}', [TeamController::class, 'update'])->name('teams.update');
    Route::delete('/teams/{id}', [TeamController::class, 'destroy'])->name('teams.destroy');
    Route::get('/teams/{team}', [TeamController::class, 'show'])->name('teams.show');
});




// BizzPro routes
Route::get('/', [BizzproController::class, 'index'])->name('bizzpro')->middleware('auth');
Route::get('/port', [BizzproController::class, 'portfolio'])->name('bizzpro.portfolios');
Route::get('/teams', [BizzProController::class, 'teams'])->name('bizzpro.teams');
Route::get('/contact', [BizzProController::class, 'contact'])->name('bizzpro.contact');
Route::get('/about', [BizzProController::class, 'about'])->name('bizzpro.about');





Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');


Route::post('/subscribe', [NewsletterController::class, 'subscribe'])->name('newsletter.subscribe');


