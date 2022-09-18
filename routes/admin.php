<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\LeadController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\SystemController;
use App\Http\Controllers\TaskController;
use App\Http\Livewire\Projects\ProjectsComponent;
use App\Http\Livewire\Projects\QuoterComponent;
use App\Models\Lot;
use Illuminate\Support\Facades\Route;
use \UniSharp\LaravelFilemanager\Lfm;

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

Route::prefix('/leads')->group(function () {
    Route::get('/', [LeadController::class, 'index'])->name('leads.index');
    Route::get('/{lead}/show', [LeadController::class, 'show'])->name('leads.show');
});
Route::get('/system', SystemController::class)->name('system.index');
Route::get('/tasks', TaskController::class)->name('tasks.index');
Route::get('/emails', EmailController::class)->name('emails.index');
Route::get('/documents', DocumentController::class)->name('documents.index');
Route::get('/reports', ReportController::class)->name('reports.index');

Route::prefix('/quote')->group(function(){
    Route::get('/',[QuoteController::class, 'index'])->name('quote.index');
});

/* Route::get('projects',QuoterComponent::class)->name('projects.index'); */
/* Route::get('/lotes',function(){
    $lots = Lot::all();
    return view('master-plan',compact('lots'));
})->name('projects'); */

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    Lfm::routes();
});

Route::middleware(['auth:sanctum', 'verified'])->prefix('admin')->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
