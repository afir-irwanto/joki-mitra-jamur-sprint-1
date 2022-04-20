<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\WorkshopController;

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

//auth
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/post_login', [AuthController::class, 'post_login'])->name('post_login');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/post_register', [AuthController::class, 'post_register'])->name('post_register');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


                            ////////////// ----- USER ----- //////////////
//user
Route::get('/user/dashboard', [DashboardController::class, 'user_dashboard'])->name('user_dashboard');

//user-workshop
Route::get('/user/workshop', [WorkshopController::class, 'user_workshop'])->name('user_workshop');
Route::get('/user/workshop/detail/{id}', [WorkshopController::class, 'user_workshop_detail'])->name('user_workshop_detail');
Route::post('/user/workshop/daftar/{id}', [WorkshopController::class, 'user_workshop_daftar'])->name('user_workshop_daftar');

//user-produk
Route::get('/user/produk', [ProdukController::class, 'user_produk'])->name('user_produk');
Route::get('/user/produk/detail/{id}', [ProdukController::class, 'user_produk_detail'])->name('user_produk_detail');

                            ////////////// ----- ADMIN ----- //////////////
Route::get('/admin/dashboard', [DashboardController::class, 'admin_dashboard'])->name('admin_dashboard');

//admin-produk
Route::get('/admin/produk', [ProdukController::class, 'admin_produk'])->name('admin_produk');
Route::get('/admin/produk/create', [ProdukController::class, 'admin_produk_create'])->name('admin_produk_create');
Route::post('/admin/produk/insert', [ProdukController::class, 'admin_produk_insert'])->name('admin_produk_insert');
Route::get('/admin/produk/edit/{id}', [ProdukController::class, 'admin_produk_edit'])->name('admin_produk_edit');
Route::post('/admin/produk/update/{id}', [ProdukController::class, 'admin_produk_update'])->name('admin_produk_update');
Route::get('/admin/produk/detail/{id}', [ProdukController::class, 'admin_produk_detail'])->name('admin_produk_detail');

//admin-workshop
Route::get('/admin/workshop', [WorkshopController::class, 'admin_workshop'])->name('admin_workshop');
Route::get('/admin/workshop/create', [WorkshopController::class, 'admin_workshop_create'])->name('admin_workshop_create');
Route::post('/admin/workshop/insert', [WorkshopController::class, 'admin_workshop_insert'])->name('admin_workshop_insert');
Route::get('/admin/workshop/edit/{id}', [WorkshopController::class, 'admin_workshop_edit'])->name('admin_workshop_edit');
Route::post('/admin/workshop/update/{id}', [WorkshopController::class, 'admin_workshop_update'])->name('admin_workshop_update');
Route::get('/admin/workshop/detail/{id}', [WorkshopController::class, 'admin_workshop_detail'])->name('admin_workshop_detail');
