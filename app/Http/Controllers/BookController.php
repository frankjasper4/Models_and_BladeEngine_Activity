<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book; // Assuming your Book model

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all(); // Fetch all books
        return view('welcome', compact('books'));
    }
}