<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Product;
use App\Models\Cart;


class NavController extends Controller
{
    public function shop()
    {
        $categories = Category::with('brands.products')->get();
        return view('frontend.main-pages.shop', compact('categories'));
    }
    public function product($id)
    {
        $categories = Category::with('brands.products')->get();
        $product = Product::with('brand.category')->find($id);
        
        if (!$product) {
            return redirect()->route('shop')->with('error', 'Product not found');
        }
    
        return view('frontend.main-pages.product-details', compact('product','categories'));
    }

}
