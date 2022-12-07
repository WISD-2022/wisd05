<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

//aa.a1
Route::get('aa/a1', function () {
    return view('aa.a1');
});
//aa.a2
Route::get('aa/a2', function () {
    return view('aa.a2');
});
Route::get('/bb/b1', function () {
    return view('bb.b1');
});
Route::get('/bb/b2', function () {
    return view('bb.b2');
});
//cc.c1
Route::get('/cc/c1', function () {
    return view('cc.c1');
});
