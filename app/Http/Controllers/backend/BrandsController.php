<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Category;

class BrandsController extends Controller
{

    public function getBrandsByCategory($categoryId)
    {
        $brands = Brand::where('category_id', $categoryId)->get();
        return response()->json($brands);
    }
    // Display all categories with their brands
    public function index()
    {
        $categories = Category::with('brands')->get();
        return view('backend.main-pages.brands', compact('categories'));
    }

    // Store a new category and its associated brands
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'category_id' => 'required|exists:categories,id',
            'brands' => 'required|array',
            'brands.*' => 'string|max:255',
        ]);
    
        $category = Category::find($validatedData['category_id']);
        
        // Loop through the brands and create new Brand records
        foreach ($validatedData['brands'] as $brandName) {
            // Ensure the brand name is not empty
            if (trim($brandName) !== '') {
                $brand = new Brand();
                $brand->name = $brandName;
                $brand->category_id = $category->id;
                $brand->save();
            }
        }
    
        return redirect()->route('brands.index')->with('success', 'Brands added successfully.');
    }
    

    // Update a category and its associated brands
    public function update(Request $request, $id)
    {
        // Find the category
        $category = Category::findOrFail($id);

        // Update the category name
        $category->update(['name' => $request->category]);

        // Handle brand updates
        $existingBrandIds = $category->brands->pluck('id')->toArray();
        $submittedBrandIds = array_filter($request->brand_ids);

        // Delete brands that are not in the new input
        $brandsToDelete = array_diff($existingBrandIds, $submittedBrandIds);
        Brand::whereIn('id', $brandsToDelete)->delete();

        // Update or create new brands
        foreach ($request->brands as $key => $brandName) {
            if (!empty($brandName)) {
                if (isset($request->brand_ids[$key])) {
                    // Update existing brand
                    $brand = Brand::find($request->brand_ids[$key]);
                    $brand->update(['name' => $brandName]);
                } else {
                    // Create new brand
                    Brand::create([
                        'name' => $brandName,
                        'category_id' => $category->id,
                    ]);
                }
            }
        }

        return redirect()->back()->with('success', 'Category and brands updated successfully.');
    }

    // Delete a brand
    public function destroyBrand($id)
    {
        $brand = Brand::findOrFail($id);
        $brand->delete();

        return redirect()->back()->with('success', 'Brand deleted successfully.');
    }

    // Delete a category and its associated brands
    public function destroyCategory($id)
    {
        // Find and delete the category and its brands
        $category = Category::findOrFail($id);
        $category->brands()->delete(); // Delete all associated brands
        $category->delete(); // Delete the category itself

        return redirect()->back()->with('success', 'Category and its brands deleted successfully.');
    }
}

