<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Product;
use App\Http\Requests\Product\StoreRequest;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function index(Product $product)
    {
        $user = Auth::user();
        \DB::enableQueryLog();
        $user->load('roles');
        dd(\DB::getQueryLog());
        $products = $product->get();
        dd($products->toArray());
    }

    public function create(StoreRequest $request, User $user, Product $product)
    {
        $this->authorize('create', $product);

        $product->create([
            'name' => $request->name
        ]);
    }

    public function update(StoreRequest $request, User $user, Product $product)
    {
        $this->authorize('create', $product);

        $product->create([
            'name' => $request->name
        ]);
    }
}
