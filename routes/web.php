<?php

use App\Http\Controllers\LeadController;
use App\Http\Requests\LeadsRequest;
use App\Mail\RemindTask;
use App\Models\Development;
use App\Models\Lead;
use App\Models\Task;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use RealRashid\SweetAlert\Facades\Alert;
use Spatie\GoogleCalendar\Event;

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
    $developments = Development::all();
    return view('welcome', compact('developments'));
})->name('home');

Route::get('/terminos-y-condiciones', function () {
    return view('terms');
});

Route::get('/avisodeprivadidad', function () {
    return view('policy');
});
Route::get('storage-link', function () {
    Artisan::call('storage:link');
});

Route::get('task-start', function () {
    Artisan::call('schedule:work');
});

Route::post('leads', function (LeadsRequest $request) {
    Lead::create($request->all());
    return redirect('/')->withSuccess('Informacion enviada con exito');
})->name('form.leads');

Route::get('migrates', function () {
    Artisan::call('migrate');
});
Route::get('queue', function () {
    Artisan::call('queue:work');
});



Route::get('/calendario', function () {
    $events = Event::get();
    return $events;
});



Route::get('email', function () {
    $tasks = Task::whereBetween('expiration', [now()->subDay()->toDateTimeString(), now()])->get();
    foreach ($tasks as $task) {
        Mail::to($task->user->email)->queue(new RemindTask);
    }
    /* Artisan::call('queue:work'); */
    return $tasks;
});
