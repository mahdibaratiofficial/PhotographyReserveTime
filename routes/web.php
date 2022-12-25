<?php

use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;
use app\Http\Controllers\Admin\HomeController as Admin;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Services\Calendar\Calendar;
use Morilog\Jalali\Jalalian;

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

// Route::prefix('admin')->group(function(){
//     Route::view('/','admin.index')->middleware('auth');
// });

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::view('/', 'admin.index');

    Route::prefix('user')->group(function () {
        Route::view('all', 'admin.users.all');
    });

    Route::prefix('reserve')->group(function () {
        Route::view('all', 'admin.reserves.all');
    }
    );
});

// Users Route
Route::view('/', 'main.index');
Route::view('reserve', 'main.reserve')->middleware('auth');

Route::view('text', 'main.text');

Route::middleware(['guest'])->group(function () {
    Route::view('register', 'main.auth.register')->name('auth.register');
    Route::view('login', 'main.auth.login')->name('auth.login');
});

Route::get('test', function () {
    $date=Jalalian::now();
    // dd($date->getDayOfWeek());
    dd(Calendar::getMounthDays(2)['date']);
})->middleware('auth');

Route::post('logout', function () {
    Session::flush();
    Auth::logout();
    // return redirect('/');
})->name('logout');



Route::get('/livewire/{topic}', function ($topic) {
    return view('livewiredocs.actions');
});




