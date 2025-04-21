<?php

namespace App\Http\Controllers\Barber;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function list(Request $request)
    {
        $query = Category::query();

        if ($request->has('search') && !empty($request->search)) {
            $query->where('name', 'like', '%' . $request->search . '%');
        }

        $categories = $query->paginate(10);

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

    public function update(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'name' => 'required|string|max:255',
        ]);

        $category = Category::where('id', $request->id)->first();

        if (!$category) {
            return redirect()->back()->with('error', 'Category not found!');
        }


        $category->update([
            'name' => $request->name,
        ]);
        return redirect()->route('barber.category.list')->with('success', 'Category updated successfully.');
    }

    public function edit($id)
    {
        $category = Category::where('id', $id)->first();
        if (!$category) {
            return redirect()->back()->with('error', 'something went wrong');
        }
        return view('Barber.categories.edit', compact('category'));
    }

    public function delete($id)
    {
        $contact = Category::findOrFail($id);
        $contact->delete();

        return redirect()->route('barber.category.list')
            ->with('success', 'Category deleted successfully');
    }
}
