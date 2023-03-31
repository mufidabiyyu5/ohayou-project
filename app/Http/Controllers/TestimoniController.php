<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimoniController extends Controller
{
    public function index(Request $request)
    {
        $items = Testimonial::get();
        return view('pages.testimonial', [
            'items' => $items
        ]);

        // return view('pages.home');
    }
}
