<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\DoctorController;
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
require __DIR__.'/auth.php';

Route::get('/', function () {
    return view('index');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/{doctor}/create-appointment', [AppointmentController::class,'CreateZoomMeeting']);

Route::get('/add-doctor',[DoctorController::class,'create'])->middleware('auth');
Route::post('/add-doctor',[DoctorController::class,'store']);

Route::get('/doctors', [DoctorController::class, 'list']);
Route::get('/{doctor}', [DoctorController::class,'showSingle']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

