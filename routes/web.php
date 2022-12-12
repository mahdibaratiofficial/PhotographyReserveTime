<?php

use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;
use app\Http\Controllers\Admin\HomeController as Admin;
use App\Models\User;

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

Route::prefix('admin')->namespace('Admin')->group(function(){
    Route::view('/','admin.index');
});

// Users Route
Route::resource('user',UsersController::class);


