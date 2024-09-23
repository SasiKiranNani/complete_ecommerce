<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('category', 'brand')->get(); // Ensure category, brand, and gallery images are loaded
        $categories = Category::all(); // Fetch all categories
        $brands = Brand::all(); // Fetch all brands
        return view('backend.main-pages.product', compact('products', 'categories', 'brands'));
    }

    public function store(Request $request)
    {
        // Validate request
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'brand_id' => 'required|exists:brands,id',
            'product_name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:products,slug',
            'description' => 'nullable|string',
            'regular_price' => 'required|numeric',
            'sale_price' => 'nullable|numeric',
            'product_image' => 'nullable|image',
            'gallery_images' => 'nullable|array',
            'gallery_images.*' => 'nullable|image',
        ]);

        // Create new product
        $product = Product::create([
            'category_id' => $request->category_id,
            'brand_id' => $request->brand_id,
            'product_name' => $request->product_name,
            'slug' => $request->slug,
            'description' => $request->description,
            'regular_price' => $request->regular_price,
            'sale_price' => $request->sale_price,
            'product_image' => $request->hasFile('product_image') ? $request->file('product_image')->store('products', 'public') : null,
        ]);

        if ($request->hasFile('gallery_images')) {
            $galleryImages = [];
            foreach ($request->file('gallery_images') as $image) {
                $galleryImages[] = $image->store('gallery', 'public');
            }
            $product->gallery_images = json_encode($galleryImages);
            $product->save();
        }

        $product->save();

        return redirect()->route('products.index')->with('success', 'Product added successfully.');
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'brand_id' => 'required|exists:brands,id',
            'product_name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:products,slug,' . $product->id,
            'description' => 'nullable|string',
            'regular_price' => 'required|numeric',
            'sale_price' => 'nullable|numeric',
            'product_image' => 'nullable|image',
            'gallery_images' => 'nullable|array',
            'gallery_images.*' => 'nullable|image',
        ]);

        $product->fill($request->only(['category_id', 'brand_id', 'product_name', 'slug', 'description', 'regular_price', 'sale_price']));

        if ($request->hasFile('product_image')) {
            if ($product->product_image) {
                \Storage::disk('public')->delete($product->product_image);
            }
            $product->product_image = $request->file('product_image')->store('products', 'public');
        }

        if ($request->hasFile('gallery_images')) {
            if ($product->gallery_images) {
                $existingGalleryImages = json_decode($product->gallery_images, true);
                foreach ($existingGalleryImages as $image) {
                    \Storage::disk('public')->delete($image);
                }
            }
            $galleryImages = [];
            foreach ($request->file('gallery_images') as $image) {
                $galleryImages[] = $image->store('gallery', 'public');
            }
            $product->gallery_images = json_encode($galleryImages);
        }

        $product->save();

        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }


    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }
}
