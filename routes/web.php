

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\dataController;
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
Route::get('/',[MainController::class, 'index']);
Route::get('/data', [dataController::class,'index']);
Route::get('/dataSave', [dataController::class,'save']);
Route::post('/data/save', [dataController::class,'save'])->name('newUser.method');
Route::get('/data/newUser', [DataController::class, 'newUser'])->name('data.newUser');
//Route::get('/data/{data}', [DataController::class, 'GetData'])->name('datacontroller-getdata');
Route::post('/data/newUser', [DataController::class, 'newUser'])->name('controller.method');

Route::get('/roles',[dataController::class ,'showRole']);
Route::get('/userole', [datacontroller::class,'make_Relationship']);
Route::get('/welcome', function () {
    return view('welcome');
});
