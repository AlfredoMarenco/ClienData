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
use UniSharp\LaravelFilemanager\Lfm;

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
    return view('index', compact('developments'));
})->name('home');

Route::get('/terminos-y-condiciones', function () {
    return view('terms');
});

Route::get('/contactar-a-un-asesor', function () {
    return view('contacto');
});
Route::get('/que-elementos-componen-el-marketing-gastronomico', function () {
    return view('entradas.marketing');
});

Route::view('/ojo-de-agua-merida', 'clientes.ojodeagua') -> name('ojo-de-agua-merida');

Route::get('/avisodeprivadidad', function () {
    return view('policy');
});
Route::get('storage-link', function () {
    Artisan::call('storage:link');
});
Route::get('route-clear', function () {
    Artisan::call('route:clear');
});
Route::get('config-clear', function () {
    Artisan::call('config:clear');
});

Route::get('task-start', function () {
    Artisan::call('schedule:work');
});

Route::post('leads', function (LeadsRequest $request) {
    /* return $request->all(); */
    Lead::create($request->all());
    return redirect('/')->withSuccess('Informacion enviada con exito');
})->name('form.leads');

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
