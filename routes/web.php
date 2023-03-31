<?php

use App\Http\Controllers\JobController;
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

Route::get('/', [JobController::class, "index"])->name('jobs.index');

Route::get('/jobs/add', [JobController::class, "create"])->name("jobs.create");

Route::get('/jobs/{id}', [JobController::class, "show"])->name('jobs.show');

Route::post('/jobs/add', [JobController::class, "store"])->name('jobs.store');
