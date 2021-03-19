<?php

use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\HomeController;
use GuzzleHttp\Middleware;
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

Route::get('/', [HomeController::class, 'ShowHome'])->name('home');

Route::get('/manage-applications', [ApplicationController::class, 'ManageApps'])->name('app_management');
Route::get('/app/edit/{id}', [ApplicationController::class, 'EditApp']);
Route::post('/app/update/{id}', [ApplicationController::class, 'UpdateApp']);
Route::get('/app/delete/{id}', [ApplicationController::class, 'DeleteApp']);
Route::post('/app/add', [ApplicationController::class, 'AddApp'])->name('add_new_app');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
