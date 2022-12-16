<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\events;
use App\Http\Controllers\EventsController;

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

// Route::get('/', function () { return view('welcome2'); });

Route::get('/all', [EventsController::class, 'index' ]);
Route::get('show/{id}', [EventsController::class, 'showEventById' ]);
Route::get('create', [EventsController::class, 'create' ]);
Route::get('dell/{id}', [EventsController::class, 'dellEventById'] );
Route::get('update/{id}', [EventsController::class, 'updateEventById'] );

