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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin/photo', [App\Http\Controllers\AdminPhotoController::class, 'index'])->name('admin.photo.index');
Route::get('/admin/photo/create', [App\Http\Controllers\AdminPhotoController::class, 'create'])->name('admin.photo.create');
Route::post('admin/photo', [App\Http\Controllers\AdminPhotoController::class, 'store'])->name('admin.photo.store');

Route::get('/admin/femaleped', [App\Http\Controllers\FemalePedigreeController::class, 'index'])->name('admin.femaleped.index');
Route::get('/admin/maleped', [App\Http\Controllers\MalePedigreeController::class, 'index'])->name('admin.maleped.index');
Route::get('/admin/pedigree', [App\Http\Controllers\PedigreeController::class, 'index'])->name('admin.pedigree.index');
Route::get('/admin/pedigree/create', [App\Http\Controllers\PedigreeController::class, 'create'])->name('admin.pedigree.create');

Route::get('/admin/dogs/index', [App\Http\Controllers\DogController::class,'index'])->name('admin.dogs.index');
Route::post('/admin/dogs', [App\Http\Controllers\DogController::class,'store'])->name('admin.dogs.store');
Route::get('/admin/dogs/create', [App\Http\Controllers\DogController::class,'create'])->name('admin.dogs.create');
Route::get('/admin/dogs/edit/{id}', [App\Http\Controllers\DogController::class,'edit'])->name('admin.dogs.edit');
Route::patch('/admin/dogs/update/{id}', [App\Http\Controllers\DogController::class,'update'])->name('admin.dogs.update');