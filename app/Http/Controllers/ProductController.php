<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;

class ProductController extends Controller
{
     //
     public function index(){
        return view('products.index');

    }

    public function create(){
        return view('products.create');
    }
    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'price' => 'required|decimal:2',
            'description' => 'required|string',
            'feature_image' => 'required|string',
            'gallery_image' => 'required|string',
            'shipping_cost' => 'nullable',
            'product_status' => 'nullable',
        ]);

        $newProduct = Product::create($data);

        return redirect(route('product.index'));
    }
}
