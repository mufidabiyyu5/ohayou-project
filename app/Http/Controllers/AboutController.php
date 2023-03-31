<?php

namespace App\Http\Controllers;

use App\Models\Clients;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(Request $request)
    {
        $items = Clients::get();
        return view('pages.about', [
            'items' => $items
        ]);

        // return view('pages.home');
    }
}