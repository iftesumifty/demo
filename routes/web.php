<?php

use App\Http\Controllers\BackendController;
use App\Http\Controllers\FrontenedController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
    //return view('welcome');
//});

Route::get('/',[BackendController::class,'home'])->name('home');
Route::get('login',[BackendController::class,'login'])->name('login');
Route::post('login1',[BackendController::class,'login1'])->name('login1');
Route::get('registration',[BackendController::class,'registration'])->name('registration');
Route::post('/create/user',[BackendController::class,'create_user'])->name('create_user');
Route::get('user',[FrontenedController::class,'user'])->name('user');
Route::get('index11',[FrontenedController::class,'index11'])->name('index11');
Route::get('view1',[FrontenedController::class,'view1'])->name('view1');
//Route::middleware(['admin_check'])->group(function () {
    //create user
   
    Route::post('another',[BackendController::class,'another'])->name('another');
    Route::get('editt/{id}',[BackendController::class,'editt'])->name('editt'); 
    Route::put('update/{id}',[BackendController::class,'update'])->name('update');
Route::get('index',[BackendController::class,'index'])->name('index');

Route::get('logout',[BackendController::class,'logout'])->name('logout');

Route::get('admin',[BackendController::class,'admin'])->name('admin');

//for user

Route::get('upd/{id}',[BackendController::class,'up1'])->name('up1'); //enable
Route::get('userindex',[BackendController::class,'userindex'])->name('userindex');
Route::get('userform',[FrontenedController::class,'userform'])->name('userform');
Route::get('logout1',[FrontenedController::class,'logout1'])->name('logout1');
Route::post('mes1',[FrontenedController::class,'messagepass'])->name('messagepass');

//});
