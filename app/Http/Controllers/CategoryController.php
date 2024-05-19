<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index () {
        $categories = Category::all();
        return view('pages.dashboard.categories', [ 'categories' => $categories ]);
    }

    public function create () {
        return view('pages.dashboard.create-category');
    }

    public function store (Request $request) {
        $data = $request->validate([
            'name' => 'string|required'
        ]);

        Category::create([
            'name' => $data['name']
        ]);

        return redirect('dashboard/categories/');
    }
}
