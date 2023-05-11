<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // show products
    public function showProducts(Request $request) {
        // dd($request);
        return view('user.all_products',['request' => $request ], [
            'products' => Products::latest()
            ->filter(request(['category','brand']))
            ->paginate(10)
        ]);
    }
    // Show Brands
    public function showProductBrands(Request $request) {
        // dd($request);
        return view('user.product_brands',['request' => $request ],[
            'products' => Products::latest()
            ->filter(request(['brand','category']))
            ->paginate(10)
        ]);
    }
    
}
