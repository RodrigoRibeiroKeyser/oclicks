<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PlanosController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/', [homeController::class, 'index'])->name('index');
Route::get('/planos', [homeController::class, 'planos'])->name('planos');
Route::get('/login' ,[homeController::class, 'login'])->name('login');
Route::post('/logindo', [LoginController::class, 'authenticate']);
Route::get('/register', [HomeController::class, 'create'])->name('register');//mudar para usercontroler
Route::post('/create-user', [UserController::class, 'store']); //registro de usuario


Route::middleware('auth')->group( function() {
//dashboard
Route::get('dashboard/', [DashboardController::class, 'homeDashboard'])->name('DashboardHome');
Route::get('dashboard/user-register', [DashboardController::class, 'userRegisterShow'])->name('UserRegisterShow');
Route::post('dashboard/create-user', [UserController::class, 'store']); //registro de usuario
Route::get('dashboard/list-users', [UserController::class, 'create'])->name('ListUsers');
Route::post('dashboard/logout', [LoginController::class, 'destroy'])->name('logout');
//planos no dashboard
Route::get('dashboard/cadastro-de-planos', [PlanosController::class, 'index'])->name('planosRegisterShow');
Route::post('dashboard/create-planos', [PlanosController::class, 'create']);
});