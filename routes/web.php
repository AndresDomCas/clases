<?php

use Illuminate\Support\Facades\Route;

/* Controladores */
use App\Http\Controllers\crud\Crud;


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


Route::get('/crud',[Crud::class, 'index'])->name('crud/index');

/* Insertar datos */
Route::get('/crud/create',[Crud::class,'create']);
Route::post('/crud',[Crud::class,'store'])->name('crud/store');
