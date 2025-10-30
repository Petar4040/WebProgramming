<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
      public function home()
    {
        $title = 'Available Books';
        $books = [
            'Book1',
            'Book2',
            'Book3',
        ];

        return view('books.books', compact('title', 'books'));
    }
}
