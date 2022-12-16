<?php

use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\KuchbController;
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


Route::group(['prefix'=>'departments'],function(){

    Route::get('/',[DepartmentController::class,'index'])->name('departments.index');

    Route::get('/create',[DepartmentController::class,'create'])->name('departments.create');

    Route::post('/store', [DepartmentController::class,'store'])->name('departments.store');

    Route::get('/edit/{id}',[DepartmentController::class,'edit'])->name('departments.edit');

    Route::post('/update/{id}', [DepartmentController::class,'update'])->name('departments.update');
    Route::get('/delete/{id}',[DepartmentController::class,'delete'])->name('departments.delete');
});





