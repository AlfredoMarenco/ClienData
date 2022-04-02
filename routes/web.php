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
use HubSpot\Factory;
use HubSpot\Client\Crm\Contacts\ApiException;
use HubSpot\Client\Crm\Contacts\Model\SimplePublicObjectInput;

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

    $client = Factory::createWithApiKey("582bd6fe-66b6-4b33-8c0d-37df9a221ba8");

    $properties = [
        "email" => $request->email,
        "firstname" => $request->name,
        "lastname" => $request->last_name,
        "phone" => $request->phone,
    ];
    $SimplePublicObjectInput = new SimplePublicObjectInput(['properties' => $properties]);
    try {
        $apiResponse = $client->crm()->contacts()->basicApi()->create($SimplePublicObjectInput);
        var_dump($apiResponse);
    } catch (ApiException $e) {
        echo "Exception when calling basic_api->create: ", $e->getMessage();
    }

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

Route::get('hubspot',function(){

    $client = Factory::createWithApiKey("582bd6fe-66b6-4b33-8c0d-37df9a221ba8");

    $properties = [
        "company" => "Biglytics",
        "email" => "alfredo@biglytics.net",
        "firstname" => "Bryan",
        "lastname" => "Cooper",
        "phone" => "(877) 929-0687",
        "website" => "biglytics.net"
    ];
    $SimplePublicObjectInput = new SimplePublicObjectInput(['properties' => $properties]);
    try {
        $apiResponse = $client->crm()->contacts()->basicApi()->create($SimplePublicObjectInput);
        var_dump($apiResponse);
    } catch (ApiException $e) {
        echo "Exception when calling basic_api->create: ", $e->getMessage();
    }
});
