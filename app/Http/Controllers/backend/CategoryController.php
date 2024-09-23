<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('backend.main-pages.categories', compact('categories'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'new_category' => 'required|string|max:255|unique:categories,name',
        ]);

        Category::create([
            'name' => $request->new_category,
        ]);

        return redirect()->back()->with('success', 'Category added successfully');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'category' => 'required|string|max:255|unique:categories,name,' . $id,
        ]);

        $category = Category::findOrFail($id);
        $category->update([
            'name' => $request->category,
        ]);

        return redirect()->back()->with('success', 'Category updated successfully');
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return redirect()->back()->with('success', 'Category deleted successfully');
    }
}


