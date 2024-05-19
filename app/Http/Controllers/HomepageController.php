<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index (Request $req, Category $category) {
        $categories = Category::all();

        if ($category->id) {
            $books = $category->books;
        } else {
            $books = Book::all();
        }

        return view('pages.homepage', [ 'books' => $books, 'categories' => $categories, 'category' => $category ]);
    }
}
