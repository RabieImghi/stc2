<?php

use App\Http\Controllers\CategoryController;
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
Route::get('/EventsDetails/{id}', [EventController::class, 'eventsDetail']);
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/AuthRegister', [AuthController::class, 'Register']);
Route::get('/AuthResetPassword', [AuthController::class, 'ResetPassword']);
Route::post('/ResetPassword', [AuthController::class, 'sendPasswordCode']);
Route::post('/checkPasswordCode', [AuthController::class, 'checkPasswordCode']);
Route::post('/changePassword', [AuthController::class, 'changePassword']);

Route::post('/Register', [AuthController::class, 'store']);
Route::post('/login', [AuthController::class, 'loginUser']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::get('/admin', [UserContreoller::class, 'index'])->middleware('auth');
Route::get('/PermissionUser', [UserContreoller::class, 'permissionUser'])->middleware('auth');
Route::post('/AddPermissionUser', [PermissionController::class, 'addPermissionUser'])->middleware('auth');
Route::post('/deletePermissionUser', [PermissionController::class, 'deletePermissionUser'])->middleware('auth');
Route::get('/PermissionRole', [UserContreoller::class, 'PermissionRole'])->middleware('auth');
Route::post('/AddPermissionRole', [PermissionController::class, 'AddPermissionRole'])->middleware('auth');
Route::post('/deletePermissionRole', [PermissionController::class, 'deletePermissionRole'])->middleware('auth');
Route::get('/error', [UserContreoller::class, 'error']);


Route::get('/GestionUsers', [UserContreoller::class, 'GestionUsers'])->middleware('auth');
Route::post('/deleteUser', [UserContreoller::class, 'deleteUser'])->middleware('auth');
Route::post('/updateRoleUser', [UserContreoller::class, 'updateRoleUser'])->middleware('auth');

Route::get('/Category', [CategoryController::class, 'index'])->middleware('auth');
Route::post('/addCategory', [CategoryController::class, 'addCategory'])->middleware('auth');
Route::post('/deleteCategory', [CategoryController::class, 'deleteCategory'])->middleware('auth');
Route::post('/updateCategory', [CategoryController::class, 'updateCategory'])->middleware('auth');


Route::get('/AddEvent', [EventController::class, 'addEventView'])->middleware('auth');
Route::post('/AddNewEvent', [EventController::class, 'AddNewEvent'])->middleware('auth');
Route::get('/GestionEvents', [EventController::class, 'GestionEvents'])->middleware('auth');
Route::get('/RefuseAccepEvent/{action}', [EventController::class, 'RefuseAccepEvent'])->middleware('auth');
Route::get('/ReserveTickete/{id}', [EventController::class, 'ReserveTickete'])->middleware('auth');
Route::get('/MyEventReservation/{id}', [EventController::class, 'MyEventReservation'])->middleware('auth');
Route::get('/AcceptReservation/{action}', [EventController::class, 'AcceptReservation'])->middleware('auth');




