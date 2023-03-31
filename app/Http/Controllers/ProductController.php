<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Products;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $category = Category::with(['products'])->get(); 
        // $product = Products::with(['galleries'])->get();
        return view('pages.product', [
            'category' => $category,
            // 'product' => $product
        ]);
    }
}

?>