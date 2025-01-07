<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return view('index');
    });
});

Route::get('admin/dashboard', function () {
    return view('admin/dashboard');
})->name('admin.dashboard')->middleware('auth');

Route::get('/test', function () {
    return view('test');
});

Route::get('/tambahlaporan', function () {
    return view('formtambah');
});

Route::get('/profile', function () {
    return view('profile', ['user' => Auth::user()]);
})->middleware('auth');

Route::get('/assets', function () {
    return view('assets');
});

Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::get('register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('register', [AuthController::class, 'register']);
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/edit/{id}', [AuthController::class, 'edit'])->name('edit');
route::post('/update/{id}', [AuthController::class, 'update'])->name('update');
