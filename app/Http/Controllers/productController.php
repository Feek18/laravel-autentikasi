<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class productController extends Controller
{
    public function productData(Request $request)
    {
        $product = Product::all();
        return view('product')->with('product', $product);
    }
}
