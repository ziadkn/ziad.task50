<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{
    public function index () {
        $books = Book::with('category')->get();
        return view('pages.dashboard.books', [ 'books' => $books ]);
    }

    public function create () {
        $categories = Category::all();

        return view('pages.dashboard.create-book', [ 'categories' => $categories ]);
    }

    public function store (Request $request) {
        $data = $request->validate([
            'name' => 'string|required',
            'description' => 'string|required',
            'published_at' => 'date|required',
            'category_id' => 'integer|sometimes|exists:categories,id'
        ]);

        Book::create([
            'name' => $data['name'],
            'description' => $data['description'],
            'published_at' => $data['published_at'],
            'category_id' => $data['category_id'],
            'created_by' => Auth::user()->id,
        ]);

        return redirect('dashboard/books');
    }
}
