<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController; // Import your BookController

Route::get('/', [BookController::class, 'index'])->name('books.index'); // Route for book list
Route::get('/books/{book}', [BookController::class, 'show'])->name('books.show'); // Route for book detail (replace '{book}' with actual parameter)

