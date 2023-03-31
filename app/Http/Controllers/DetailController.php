<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class DetailController extends Controller
{
    public function index(Request $request, $id){
        $items = Products::with(['galleries', 'price_list'])->where('id', $id)->firstOrFail();
        return view('pages.detail', [
            'items' =>  $items
        ]);
    }
}
