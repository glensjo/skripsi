<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\ControllerView;
use App\Http\Controllers\ControllerDashboard;
use App\Http\Controllers\ControllerLogin;
use App\Http\Controllers\ControllerProducts;
use App\Http\Controllers\ControllerUser;
use App\Http\Controllers\ControllerSession;
use App\Http\Controllers\ControllerRegister;

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

//Route Front End
Route::get('/', function () {
    return view('home');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/register', [ControllerRegister::class, 'create']);
Route::post('/register/process', [ControllerRegister::class, 'store']);
Route::get('/login', [ControllerSession::class, 'create']);
Route::post('/login/process', [ControllerSession::class, 'store']);
Route::get('/products',[ControllerView::class, 'index']);
Route::get('/products/{product_code}', [ControllerView::class, 'detail']);
Route::get('/change-password','ControllerPassword@index');
Route::post('/change-password/process','ControllerPassword@process_change');

//Route Back End
Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/adminpage', function () {
    return view('adminPage');
});
Route::get('/logout', [ControllerSession::class, 'destroy']);
// Route::get('/dashboard',[ControllerDashboard::class, 'index']);

//Route Back End <Products>
Route::get('/product',[ControllerProducts::class, 'index']);
Route::get('/product/create', [ControllerProducts::class, 'create']);
Route::post('/product/create/process', [ControllerProducts::class, 'process_create']);
Route::get('/product/update/{product_code}', [ControllerProducts::class, 'update']);
Route::post('/product/update/{product_code}/process', [ControllerProducts::class, 'process_update']);
Route::get('/product/delete/{product_code}', [ControllerProducts::class, 'delete']);

//Route Back End <User>
Route::get('/user',[ControllerUser::class, 'index']);
Route::get('/user/create', [ControllerUser::class, 'create']);
Route::post('/user/create/process', [ControllerUser::class, 'process_create']);
Route::get('/user/update/{id}', [ControllerUser::class, 'update']);
Route::post('/user/update/{id}/process', [ControllerUser::class, 'process_update']);
Route::get('/user/delete/{id}', [ControllerUser::class, 'delete']);