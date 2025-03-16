<?php

namespace App\Http\Controllers\Barber;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function list()
    {
        $categories = Category::paginate(10);
        return view('Barber.categories.list', compact('categories'));
    }

    // Show create category form
    public function create()
    {
        return view('Barber.categories.create');
    }

    // Save category
    public function save(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:categories,name',
        ]);

        Category::create([
            'name' => $request->name,
        ]);

        return redirect()->route('barber.category.list')->with('success', 'Category created successfully.');
    }
}
