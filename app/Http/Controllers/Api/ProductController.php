<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(Product $product)
    {
        $products = $product->get();
        dd($products->toArray());
    }

    public function create()
    {
        
    }
}
