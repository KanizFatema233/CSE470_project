<?php
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [App\Http\Controllers\front_page_controller::class, 'front_page']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/attendance', [App\Http\Controllers\HomeController::class, 'attendance'])->name('attendance');

Route::post('/attendance', [App\Http\Controllers\HomeController::class, 'attendance_take'])->name('attendance_take');

Route::get('/inventory', [App\Http\Controllers\HomeController::class, 'inventory'])->name('inventory');
