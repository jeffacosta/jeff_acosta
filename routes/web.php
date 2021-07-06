<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\PersonasController;
use App\Http\Controllers\CuentaUsuariosController;
use App\Http\Controllers\TelefonosController;
use App\Http\Controllers\DeclaracionsController;
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



Route ::post ('/users', [UsersController::class, 'store']);
Route ::post ('/contacts', [ContactsController::class, 'store']);
Route ::post ('/personas', [PersonasController::class, 'store']);
Route ::post ('/cuenta_usuarios', [CuentaUsuariosController::class, 'store']);
Route ::post ('/telefonos', [TelefonosController::class, 'store']);
Route ::post ('/declaracions', [DeclaracionsController::class, 'store']);