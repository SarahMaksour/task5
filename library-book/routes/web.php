<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\CategoryController;

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

Route::get('/', function () {
    return view('hi');
})->name('/');


Route::get('books',[BookController::class,'index'])->name('book.list');
Route::get('create-book',[BookController::class,'create'])->name('book.create');
Route::post('store-book',[BookController::class,'store'])->name('book.store');
Route::get('show-book/{id}',[BookController::class,'show'])->name('book.show');
Route::get('book/{id}',[BookController::class,'edit'])->name('book.edit');
Route::put('book/{id}',[BookController::class,'update'])->name('book.update');
Route::delete('book/{id}',[BookController::class,'destroy'])->name('book.delete');
Route::post('book/{id}/restore',[CategoryController::class,'restore'])->name('book.restore');

Route::get('author',[AuthorController::class,'index'])->name('author.list');
Route::get('create-author',[AuthorController::class,'create'])->name('author.create');
Route::post('store-author',[AuthorController::class,'store'])->name('author.store');
Route::get('show-author/{id}',[AuthorController::class,'show'])->name('author.show');
Route::get('author/{id}',[AuthorController::class,'edit'])->name('author.edit');
Route::put('author/{id}',[AuthorController::class,'update'])->name('author.update');
Route::delete('author/{id}',[AuthorController::class,'destroy'])->name('author.delete');


Route::get('categories',[CategoryController::class,'index'])->name('categories.list');
Route::get('create-category',[CategoryController::class,'create'])->name('categories.create');
Route::post('store-category',[CategoryController::class,'store'])->name('categories.store');
Route::get('show-category/{id}',[CategoryController::class,'show'])->name('categories.show');
Route::get('category/{id}',[CategoryController::class,'edit'])->name('categories.edit');
Route::put('category/{id}',[CategoryController::class,'update'])->name('categories.update');
Route::delete('category/{id}',[CategoryController::class,'destroy'])->name('categories.delete');
Route::post('categories/{id}/restore',[CategoryController::class,'restore'])->name('categories.restore');