<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // Show category list
    public function list()
    {
        $categories = Category::paginate(10);
        return view('Admin.categories.list', compact('categories'));
    }

    // Show create category form
    public function create()
    {
        return view('Admin.categories.create');
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

        return redirect()->route('admin.category.list')->with('success', 'Category created successfully.');
    }
}
