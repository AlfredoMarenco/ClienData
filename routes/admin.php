<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LeadController;
use App\Http\Controllers\SystemController;
use App\Http\Controllers\TaskController;
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

Route::get('/', [AdminController::class, 'index'])->name('index');

Route::prefix('leads')->group(function () {
    Route::get('/', [LeadController::class, 'index'])->name('leads.index');
    Route::get('/{lead}/show', [LeadController::class, 'show'])->name('leads.show');
});

Route::get('system', SystemController::class)->name('system.index');
Route::get('tasks', TaskController::class)->name('tasks.index');



Route::middleware(['auth:sanctum', 'verified'])->prefix('admin')->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
