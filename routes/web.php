<?php

use App\Http\Requests\LeadsRequest;
use App\Mail\LeadNew;
use App\Mail\RemindTask;
use App\Models\Lead;
use App\Models\Task;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Mail;
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

/* Route::get('/', function () {
    $developments = Development::all();
    return view('welcome', compact('developments'));
})->name('home'); */
Route::get('/', function () {
    return view('index');
});
Route::get('/ciudad-central-merida', function () {
    return view('cc-m');
})->name('desarrollo.ccm');

Route::get('/ciudad-central-progreso', function () {
    return view('cc-p');
})->name('desarrollo.ccp');

Route::get('/nosotros', function () {
    return view('nosotros');
})->name('nosotros');

Route::get('/terminos-y-condiciones', function () {
    return view('terms');
});

Route::get('/avisodeprivadidad', function () {
    return view('policy');
});

Route::get('storage-link', function () {
    Artisan::call('storage:link');
});
/*Route::get('route-clear', function () {
    Artisan::call('route:clear');
});
Route::get('config-clear', function () {
    Artisan::call('config:clear');
});

Route::get('task-start', function () {
    Artisan::call('schedule:work');
}); */

Route::get('migrates', function () {
    Artisan::call('migrate');
});
Route::get('queue', function () {
    Artisan::call('queue:work');
});

Route::middleware('auth')->get('/calendario', function () {
    return view('calendar');
});


Route::get('email', function () {
    $tasks = Task::whereBetween('expiration', [now()->subDay()->toDateTimeString(), now()])->where('status', 'pending')->get();
    foreach ($tasks as $task) {
        Mail::to($task->user->email)->queue(new RemindTask);
    }
    /* Artisan::call('queue:work'); */
    return $tasks;
});


/* Route::get('/mailable', function () {

        Mail::to(['marencocode@gmail.com','test@example.com'])->send(new LeadNew(Lead::find(1)));
        return new LeadNew(Lead::find(1));
}); */
