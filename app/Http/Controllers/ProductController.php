<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;
use PDF;
class ProductController extends Controller
{
     //
     public function index(){
        $products = Product::all();

        return view('products.index', ['products' => $products]);

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
    public function edit(Product $product){
        return view('products.edit',['product' => $product]);
    }

    public function update(Product $product, Request $request){
        $data = $request->validate([
            'name' => 'required',
            'price' => 'required|decimal:2',
            'description' => 'required|string',
            'feature_image' => 'required|string',
            'gallery_image' => 'required|string',
            'shipping_cost' => 'nullable',
            'product_status' => 'nullable',
        ]);
        $product->update($data);

        return redirect(route('product.index'));
    }

    public function delete(Product $product){
        $product->delete();
        return redirect(route('product.index'));

    }
    public function downloadPdf(Product $product){

        $pdf = PDF::loadView('products.pdf', ['product' => $product]);

        return $pdf -> download('product_details.pdf');

    }
}
