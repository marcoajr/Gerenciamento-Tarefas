<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminUser;
use App\Http\Controllers\Home\Home;

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
    return view('home.home');
});

Route::get('/home',[home::class, 'index']);
Route::get('/useradmin', [AdminUser::class, 'index']);

Route::get('/dashboard', function () {
    return view('dashboard');})
    ->middleware(['auth'])
    ->name('dashboard');

Route::get('/admin/dashboard', [AdminController::class, 'index'])
    ->middleware(['auth', 'admin'])
    ->name('admin.dashboard');

Route::get('/register', [RegisteredUserController::class, 'create'])
    ->name('register');

    require __DIR__.'/auth.php';
