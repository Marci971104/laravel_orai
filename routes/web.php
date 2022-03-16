<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorkerController;

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

Route::get("/get-employee",[WorkerController::class,"getEmployee"]);
Route::get("/list-employee",[WorkerController::class,"listEmployee"]);
ROute::get("/add-employee",[WorkerController::class,"insertEmployee"]);
Route::get("update-employee",[WorkerController::class,"updateEmployee"]);
Route::get("/delete-employee",[WorkerController::class,"deleteEmployee"]);
