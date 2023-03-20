<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\LoginController;
use App\Http\Controllers\logoutController;


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

Route::get('/', function () {
    return view('welcome');
});
//route::view('default','layout.default');
route::view('defaults','../layouts.default')->name('layout.default');
route::view('login','login');
Route::get('index',[LoginController::class,'index'])->name('login.index');
Route::post('checking',[LoginController::class,'check'])->name('login.check');
Route::get('logout',[logoutController::class,'logout'])->name('user.logout');

Route::get('dashboard',[AdminController::class,'dashboard'])->name('dashboard');


Route::get('cause_type',[AdminController::class,'cause_type'])->name('cause_type');
Route::post('fetch_cause_type',[AdminController::class,'fetch_cause_type'])->name('fetch_cause_type');
Route::post('manage_cause_type',[AdminController::class,'manage_cause_type'])->name('manage_cause_type');
Route::post('manage_cause_status',[AdminController::class,'manage_cause_status'])->name('manage_cause_status');


Route::get('add_areas',[AdminController::class,'add_areas'])->name('add_areas'); 
Route::post('fetch_areas',[AdminController::class,'fetch_areas'])->name('fetch_areas');
Route::post('manage_areas',[AdminController::class,'manage_areas'])->name('manage_areas'); 
Route::post('manage_areas_status',[AdminController::class,'manage_areas_status'])->name('manage_areas_status'); 

Route::get('ngo_list',[AdminController::class,'ngo_list'])->name('ngo_list'); 
Route::post('fetch_ngo',[AdminController::class,'fetch_ngo'])->name('fetch_ngo'); 

Route::get('add_states',[AdminController::class,'add_states'])->name('add_states'); 
Route::post('fetch_states',[AdminController::class,'fetch_states'])->name('fetch_states'); 
Route::post('manage_states',[AdminController::class,'manage_states'])->name('manage_states'); 
Route::post('manage_states_status',[AdminController::class,'manage_states_status'])->name('manage_states_status'); 
