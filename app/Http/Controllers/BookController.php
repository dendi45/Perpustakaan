<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Buku::all();
        return view('books.index', compact('books'));
    }

    public function create()
    {
        return view('books.create');
    }
}
