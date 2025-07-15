<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

// Redirect halaman utama ke daftar buku
Route::get('/', function () {
    return redirect()->route('books.index');
});

// Route untuk halaman "About"
Route::get('/about', [BookController::class, 'about'])->name('about');

// Menggunakan Route Resource untuk operasi CRUD buku
// Ini akan secara otomatis membuat route untuk index, create, store, show, edit, update, dan destroy.
Route::resource('books', BookController::class);
