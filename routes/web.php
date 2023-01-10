<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\SettingController;
use App\Http\Controllers\Dashboard\UserController;

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
    return view('dashboard.index');
});



Route::group(['prefix' => 'dashboard', 'as' => 'dashboard.' , 'middleware' =>['auth','checkLogin'] ], function () {

    Route::get('/', function () {
        return view('dashboard.layouts.layout');
    })->name('index');

    Route::get('/settings', function () {
        return view('dashboard.settings');
    })->name('settings');

    Route::post('/settings/update/{setting}' , [SettingController::class,'update'])->name('settings.update');

    Route::get('/users/all',[UserController::class,'getUsersDatatable'])->name('users.all');
    Route::get('/users/delete',[UserController::class,'delete'])->name('users.delete');

    Route::resources([
        'users'=> UserController::class,
    ]);

});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
