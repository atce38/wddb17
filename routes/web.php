<?php

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

Route::get('/', function () {
    $title="WDDB17 - Home";
    return view('welcome',compact('title'));
});
Route::get('test',function(){
return view('layouts.master');
});

// Routeing Group

Route::group(['prefix'=>'jameel'],function(){

    Route::get('/',[KuchbController::class,'index']);

        Route::get('/school',function(){
            return view('koib');
            });
        Route::get('/home',function(){
                return view('koib');
                });

});

Route::get('route/with/params/fname/{name}/lname/{lname}',[KuchbController::class,'route_with_params']);

Route::group(['prefix'=>'employee'],function(){

    Route::get('/',[EmployeeController::class,'index'])->name('emp.index');

    Route::get('/create',[EmployeeController::class,'create'])->name('emp.create');

    Route::post('/store', [EmployeeController::class,'store'])->name('emp.store');

    Route::get('/edit/{id}',[EmployeeController::class,'edit'])->name('emp.edit');

    Route::post('/update/{id}', [EmployeeController::class,'update'])->name('emp.update');
    Route::get('/delete/{id}',[EmployeeController::class,'delete'])->name('emp.delete');
});



Route::get('test',function(){
return sha1(time());
});





