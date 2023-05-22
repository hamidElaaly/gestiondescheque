<?php

use App\Http\Controllers\HomeController;


use App\Http\Controllers\AdminController;


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




Route::get('/home',[HomeController::class,'redirect']);

Route::get('/',[HomeController::class,'index']);

Route::post('/upload_check',[HomeController::class,'upload_check']);

Route::get('/home',[HomeController::class,'redirect'])->middleware('auth','verified');

Route::get('/add_check_view',[AdminController::class,'AddView']);

Route::post('/upload_checks',[AdminController::class,'upload']);

Route::get('/showcheck',[AdminController::class,'showcheck']);

Route::get('/check_page',[HomeController::class,'check_page']);

Route::get('/historique_page',[HomeController::class,'historique_page']);

Route::get('/return_hero',[HomeController::class,'return_hero']);

Route::get('/updatecheck/{id}',[AdminController::class,'updatecheck']);

Route::get('/updateUser/{id}',[AdminController::class,'updateUser']);

Route::post('/editcheck/{id}',[AdminController::class,'editcheck']);

Route::post('/editUser/{id}',[AdminController::class,'editUser']);

Route::get('/deletecheck/{id}',[AdminController::class,'deletecheck']);

Route::get('/deleteHistorique/{id}',[HomeController::class,'deleteHistorique']);

Route::get('/deleteUser/{id}',[AdminController::class,'deleteUser']);

Route::get('/showUsers',[AdminController::class,'showUsers']);

Route::get('/get-banks/{pay_id}',[HomeController::class, 'getBanks']);

Route::get('/get-pos/{bank}', [HomeController::class, 'getPOS']);

Route::get('/print-check', [HomeController::class, 'printCheck'])->name('print.check');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
