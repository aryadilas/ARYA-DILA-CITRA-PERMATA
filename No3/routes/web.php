<?php

use Illuminate\Support\Facades\Route;
use App\Models\Karyawan;
use App\Http\Controllers\KaryawanController;
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
    $data = Karyawan::all();
    return view('home', ['karyawan' => $data]);
});

Route::get('/addform', function () {
   
    return view('addform');
});



Route::post('/update/{id}', [KaryawanController::class, 'update']);
Route::get('/updateform/{id}', [KaryawanController::class, 'editform']);
Route::post('/add', [KaryawanController::class, 'addData']);
Route::delete('/delete/{id}', [KaryawanController::class, 'delete']);