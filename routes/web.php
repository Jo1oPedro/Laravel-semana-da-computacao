<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\CoreController;
use App\Http\Controllers\UserController;
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

// Dashboard
Route::get('/', function () {
    return view('home');
});

Route::get('/home', [UserController::class, "index"])->name('users.index');
Route::get('/usuarios', [UserController::class, "index"])->name('users.index');
Route::get('/usuarios/create', [UserController::class, "create"])->name('users.create');
Route::get('/usuarios/{user}', [UserController::class, "show"])->name('users.show');
Route::post('/usuarios', [UserController::class, "store"])->name('users.store');
Route::get('/usuarios/{user}/edit', [UserController::class, "edit"])->name('users.edit');
Route::put('/usuarios/{user}', [UserController::class, "update"])->name('users.update');
Route::delete('/usuarios/{user}', [UserController::class, "destroy"])->name('users.destroy');


Route::resource('/cargos', RoleController::class)->names('roles')->parameters(['cargos' => 'role']);
Route::resource('/nucleos', CoreController::class)->names('cores')->parameters(['nucleos' => 'core']);

Auth::routes();
