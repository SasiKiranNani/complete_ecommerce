<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Products;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Category::with('brands.products')->get();
        return view('frontend.main-pages.shop', compact('categories'));
    }
}
