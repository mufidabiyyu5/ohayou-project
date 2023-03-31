<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioHomeController extends Controller
{
    public function index(Request $request)
    {
        $items = Portfolio::get();
        return view('pages.portfolio', [
            'items' => $items
        ]);

        // return view('pages.home');
    }
}
