<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Mostrar la lista de productos
    public function index()
    {
        $products = Product::all();
        return view('admin.index', compact('products'));
    }

    // Mostrar el formulario de creación
    public function createProduct()
    {
        return view('admin.products.create');
    }

    // Almacenar un nuevo producto
    public function storeProduct(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255',
            'description' => 'required|string',
            'short_description' => 'required|string',
            'sale_price' => 'required|numeric',
            'regular_price' => 'required|numeric',
            'stock_status' => 'required|string',
            'quantity' => 'required|integer',
            'image' => 'required|string',
            'category_id' => 'required|integer',
            'brand_id' => 'required|integer',
        ]);

        Product::create($request->all());
        return redirect()->route('admin.index')->with('success', 'Product created successfully');
    }

    // Mostrar el formulario de edición
    public function editProduct($id)
    {
        $product = Product::find($id);
        return view('admin.products.edit', compact('product'));
    }

    // Actualizar un producto
    public function updateProduct(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255',
            'description' => 'required|string',
            'short_description' => 'required|string',
            'sale_price' => 'required|numeric',
            'regular_price' => 'required|numeric',
            'stock_status' => 'required|string',
            'quantity' => 'required|integer',
            'image' => 'required|string',
            'category_id' => 'required|integer',
            'brand_id' => 'required|integer',
        ]);

        $product = Product::find($id);
        $product->update($request->all());
        return redirect()->route('admin.index')->with('success', 'Product updated successfully');
    }

    // Eliminar un producto
    public function destroyProduct($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('admin.index')->with('success', 'Product deleted successfully');
    }
}
