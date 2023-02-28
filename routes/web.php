<?php

use App\Http\Controllers\ApiPostController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\KuchbController;
use Illuminate\Support\Facades\Route;
use Stevebauman\Location\Facades\Location;
use Illuminate\Http\Request;


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

Route::group(['prefix'=>'employee','middlware'=>'location'],function(){

    Route::get('/',[EmployeeController::class,'index'])->name('emp.index');

    Route::get('/create',[EmployeeController::class,'create'])->name('emp.create');

    Route::post('/store', [EmployeeController::class,'store'])->name('emp.store');

    Route::get('/edit/{id}',[EmployeeController::class,'edit'])->name('emp.edit');

    Route::post('/update/{id}', [EmployeeController::class,'update'])->name('emp.update');
    Route::get('/delete/{id}',[EmployeeController::class,'delete'])->name('emp.delete');
});



Route::get('test',function(Request $request){

    $ip=$request->ip();
    echo $ip.'<br>';
    if ($position = Location::get("182.187.28.86")) {
        // Successfully retrieved position.
        echo $position->countryName.'<br>';
        echo $position->cityName;
    } else {
        // Failed retrieving position.
    }
})->middleware('location');

Route::get('posts-from-api',function(){

});

Route::group(['prefix'=>'posts'],function(){

    Route::get('/',[ApiPostController::class,'index'])->name('posts.index');

    Route::get('/create',[ApiPostController::class,'create'])->name('posts.create');

    Route::post('/store', [ApiPostController::class,'store'])->name('posts.store');

    Route::get('/edit/{id}',[ApiPostController::class,'edit'])->name('posts.edit');

    Route::post('/update/{id}', [ApiPostController::class,'update'])->name('posts.update');
    Route::get('/delete/{id}',[ApiPostController::class,'delete'])->name('posts.delete');
});





