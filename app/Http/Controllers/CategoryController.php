<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;    

class CategoryController extends Controller
{
    public function show($id)
    {
        $category = Category::with('products')->findOrFail($id);
        return view('categories.show', compact('category'));
    }
}
