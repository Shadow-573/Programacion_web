<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $products = Product::all();
        return view("admin.index",compact("products"));
    }

   
    public function createProduct()
    {
        return view('admin.products.create');
    }

    public function storeProduct(Request $request)
    {
        $dataProduct = $request->except(['_token']);

        Product::insert($dataProduct);
        return redirect()->route('admin.index')->with('success', 'Product created successfully');
    }

    public function editProduct($id)
    {
        $product = Product::find($id);
        return view('admin.products.edit', compact('product'));
    }

    public function updateProduct(Request $request, $id)
    {

        $dataProduct = $request->except(['_token', '_method']);
        Product::where('id', '=', $id)->update($dataProduct);
        return redirect()->route('admin.index')->with('success', 'Product updated successfully');
    }

    public function destroyProduct($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('admin.index')->with('success', 'Product deleted successfully');
    }

}

