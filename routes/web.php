<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\AuthController;
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


Route::prefix('admin')->middleware('auth:web')->group(function(){
//...........Companies table............
Route::get('/manage/company',[CompanyController::class,'index'])->name('manage.company');
Route::get('/create/company',[CompanyController::class,'create'])->name('insert.company');
Route::post('/store/company',[CompanyController::class,'store'])->name('store.company');
Route::get('/update/company/{id}',[CompanyController::class,'edit'])->name('edit.company');
Route::post('/update/company/{id}',[CompanyController::class,'update'])->name('update.company');
Route::get('/remove/company/{id}',[CompanyController::class,'destroy'])->name('remove.company');

//............employees table.............
Route::get('/manage/employee',[EmployeeController::class,'index'])->name('manage.employee');
Route::get('/create/employee',[EmployeeController::class,'create'])->name('insert.employee');
Route::post('/store/employee',[EmployeeController::class,'store'])->name('store.employee');
Route::get('/update/employee/{id}',[EmployeeController::class,'edit'])->name('edit.employee');
Route::post('/update/employee/{id}',[EmployeeController::class,'update'])->name('update.employee');
Route::get('/remove/employee/{id}',[EmployeeController::class,'destroy'])->name('remove.employee');

});
Route::match(['get','post'],'/userregister',[AuthController::class,'Signup'])->name('signin');
Route::match(['get','post'],'/userlogin',[AuthController::class,'Login'])->name('login');
Route::get('/logout',[AuthController::class,'Logout'])->name("logout");
