<?php

use App\Http\Controllers\AddTaskController;
use App\Http\Controllers\PdfController;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('login');
});

Route::get('/admin', function () {
    return view('admin/home');
});

Route::get('/admin/request', function () {
    return view('admin/request');
});

Route::get('/admin/on_going', function () {
    return view('admin/onGoing');
});

Route::get('/admin/done', function () {
    return view('admin/done');
});

Route::resource('admin/add_task', AddTaskController::class);

Route::get('/admin/maps/realtime', function () {
    return view('admin/maps/realtimeLocation');
});

Route::get('/verify/{verify_key}', function () {
    return view('verify');
});

Route::get('/admin/label', [PdfController::class, 'label']);
