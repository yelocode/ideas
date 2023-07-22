<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IdeaController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [DashboardController::class , 'index'] )->name('dashboard');

Route::post('/ideas', [IdeaController::class , 'store'] )->name('ideas.store');

Route::get('/ideas/{idea}', [IdeaController::class , 'show'] )->name('ideas.show');

Route::get('/ideas/{idea}/edit', [IdeaController::class , 'edit'] )->name('ideas.edit');

Route::put('/ideas/{idea}', [IdeaController::class , 'update'] )->name('ideas.update');

Route::delete('/ideas/{idea}', [IdeaController::class , 'destroy'] )->name('ideas.destroy');

// ideas/4

Route::get('/terms', function(){
    return view('terms');
} );