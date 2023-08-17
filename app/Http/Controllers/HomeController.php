<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use App\Models\Products;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $products = Products::get();
        $items = Testimonial::get();
        return view('pages.home', [
            'products' =>$products,
            'items' => $items
        ]);

        // return view('pages.home');
    }
}
