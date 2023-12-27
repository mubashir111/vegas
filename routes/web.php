<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactsController;

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
    return view('index');
})->name('index');

Route::post('/form',[ContactsController::class,'submit'])->name('form_submition');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login-table', [AuthController::class, 'authenticate'])->name('login-table');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/enquiry', [ContactsController::class, 'index'])->name('admin.home');



// Route::post('/login',[ContactsController::class,'submit'])->name('form_submition');


