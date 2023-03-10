<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PlanosController;
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

Route::get('/', [homeController::class, 'index'])->name('index');
Route::get('/planos', [homeController::class, 'planos'])->name('planos');
Route::get('/login', [homeController::class, 'login'])->name('login');
Route::post('/logindo', [loginController::class, 'authenticate']); //envio do login
Route::get('/register', [CompanyController::class, 'create'])->name('register');
Route::post('/store', [CompanyController::class, 'store']); //registro de usuario




Route::middleware(['auth:admin,web'])->prefix('dashboard')->group(function () {
    //dashboard
    //login logout
    Route::get('/', [DashboardController::class, 'homeDashboard'])->name('DashboardHome');
    Route::post('/logout', [loginController::class, 'destroy'])->name('logout');
    //rotas de users
    Route::get('/user-register', [UserController::class, 'create'])->name('UserRegisterShow');
    Route::post('/create-user', [UserController::class, 'store']); //registro de usuario
    Route::get('/list-users', [UserController::class, 'index'])->name('ListUsers');
    Route::get('/profile', [DashboardController::class, 'profileEdit'])->name('ProfileEdit');
    //planos no dashboard
    Route::get('/cadastro-de-planos', [PlanosController::class, 'index'])->name('planosRegisterShow');
    Route::post('/create-planos', [PlanosController::class, 'create']);
});

