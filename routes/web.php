<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\MenuController;
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
Route::get('/',[HomeController::class,'home'])->name('home');

Route::get('/addItem',[ItemController::class,'index'])->name('addItem');
Route::post('/createItem',[ItemController::class,'create'])->name('createItem');
Route::get('/editItem',[ItemController::class,'edit'])->name('editItem');
Route::get('/allItem',[ItemController::class,'all'])->name('allItem');
// Route::get('/deleteItem',[ItemController::class,'index'])->name('addItem');

Route::get('/addMenu',[MenuController::class,'index'])->name('addMenu');
Route::post('/createMenu',[MenuController::class,'create'])->name('createMenu');
Route::get('/editMenu/{menuId}',[MenuController::class,'edit'])->name('editMenu');
Route::post('/updateMenu',[MenuController::class,'updateMenu'])->name('updateMenu');
Route::get('/deleteMenu/{menuId}',[MenuController::class,'delete'])->name('deleteMenu');
Route::get('/allMenu',[MenuController::class,'all'])->name('allMenu');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
