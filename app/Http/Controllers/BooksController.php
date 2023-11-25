<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BooksController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->query('search');
        $books = Book::where('title', 'LIKE', "%{$search}%")->get();

        return view('books', [
            'books' => $books
        ]);
    }
}
