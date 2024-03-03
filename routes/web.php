<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\UserContreoller;
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

Route::get('/', [EventController::class, 'index']);
Route::get('/Events', [EventController::class, 'events']);
Route::get('/EventsDetails', [EventController::class, 'eventsDetail']);
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/AuthRegister', [AuthController::class, 'Register']);
Route::get('/AuthResetPassword', [AuthController::class, 'ResetPassword']);

Route::post('/Register', [AuthController::class, 'store']);
Route::post('/login', [AuthController::class, 'loginUser']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::get('/admin', [UserContreoller::class, 'index']);
Route::get('/PermissionUser', [UserContreoller::class, 'permissionUser']);
Route::post('/AddPermissionUser', [PermissionController::class, 'addPermissionUser']);
Route::post('/deletePermissionUser', [PermissionController::class, 'deletePermissionUser']);
Route::get('/PermissionRole', [UserContreoller::class, 'PermissionRole']);
Route::post('/AddPermissionRole', [PermissionController::class, 'AddPermissionRole']);
Route::post('/deletePermissionRole', [PermissionController::class, 'deletePermissionRole']);
Route::get('/error', [UserContreoller::class, 'error']);


Route::get('/GestionUsers', [UserContreoller::class, 'GestionUsers']);
Route::post('/deleteUser', [UserContreoller::class, 'deleteUser']);
Route::post('/updateRoleUser', [UserContreoller::class, 'updateRoleUser']);

