<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Products;
use App\Models\Testimonial;
use App\Models\Portfolio;
use App\Models\User;

class AdminDashboardController extends Controller
{
    public function index(Request $request)
    {

        return view('pages.admin.dashboard', [
           'category' => Category::count(),
           'products' => Products::count(),
           'testimonial' => Testimonial::count(),
           'portfolio' => Portfolio::count()
        ]);
    }
}
