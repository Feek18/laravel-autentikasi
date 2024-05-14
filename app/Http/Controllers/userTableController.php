<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class userTableController extends Controller
{
    public function userTable(Request $request)
    {
        $product = Product::get();
        return view('userTable', ['product' => $product]);
    }
}
