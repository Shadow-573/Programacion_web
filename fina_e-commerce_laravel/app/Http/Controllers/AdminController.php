<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $categories = Category::all();
        $products = Product::all();
        return view("admin.index",compact("products","categories"));
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

    public function createCategory()
    {
        return view('admin.categories.create');
    }

    // Método para almacenar una nueva categoría
    public function storeCategory(Request $request){

        $dataProduct = $request->except(['_token', '_method']);

        Category::insert($dataProduct);

        return redirect()->route('admin.index')->with('success', 'Categoría creada con éxito');
    }

    // Método para mostrar el formulario de edición de categorías
    public function editCategory($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.categories.edit', compact('category'));
    }

    // Método para actualizar una categoría
    public function updateCategory(Request $request, $id)
    {
        $dataCategory = $request->except(['_token', '_method']);
        Category::where('id', '=', $id)->update($dataCategory);
        return redirect()->route('admin.index')->with('success', 'Product updated successfully');
    }

    // Método para eliminar una categoría
    public function destroyCategory($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return redirect()->route('admin.index')->with('success', 'Categoría eliminada con éxito');
    }

}

