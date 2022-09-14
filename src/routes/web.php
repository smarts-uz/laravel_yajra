<?php

use Illuminate\Support\Facades\Route;

use Teamprodev\Yajra\Http\Controllers\YajraController;

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

Route::get('users', [YajraController::class, 'index'])->name('users.index');
