<?php

namespace App\Http\Controllers;

use App\Models\Audit;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $categories = Category::all();
        $products = Product::all();
        $users = User::all();
        $audits = Audit::all();
        return view("admin.index",compact("products","categories","users",'audits'));
    }


    public function createProduct()
    {
        return view('admin.products.create');
    }

    public function storeProduct(Request $request)
    {
        $dataProduct = $request->except(['_token']);

        $product = Product::create($dataProduct);


        Audit::create([
            'action' => 'create',
            'auditable_type' => Product::class,
            'auditable_id' => $product->id,
            'new_values' => json_encode($dataProduct)
        ]);

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
        $oldProduct = Product::find($id)->toArray();
        Product::where('id', '=', $id)->update($dataProduct);

        Audit::create([
            'action' => 'update',
            'auditable_type' => Product::class,
            'auditable_id' => $id,
            'old_values' => json_encode($oldProduct),
            'new_values' => json_encode($dataProduct)
        ]);

        return redirect()->route('admin.index')->with('success', 'Product updated successfully');
    }

    public function destroyProduct($id)
    {
        $product = Product::find($id);
        $oldProduct = $product->toArray();
        $product->delete();

        Audit::create([
            'action' => 'delete',
            'auditable_type' => Product::class,
            'auditable_id' => $id,
            'old_values' => json_encode($oldProduct)
        ]);

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


#-----------------------------------------------------------------------------------------------------------------------------------
#////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
#-----------------------------------------------------------------------------------------------------------------------------------


public function createUser()
{
    return view('admin.users.create');
}

// Método para almacenar una nuevo usuario
public function storeUser(Request $request){

    $dataUser = $request->except(['_token', '_method']);

    User::insert($dataUser);

    return redirect()->route('admin.index')->with('success', 'Usuario creado con éxito');
}

// Método para mostrar el formulario de edición de usuarios
public function editUser($id)
{
    $user = User::findOrFail($id);
    return view('admin.users.edit', compact('user'));
}

// Método para actualizar un usuarios
public function updateUser(Request $request, $id)
{
    $dataUser = $request->except(['_token', '_method']);
    User::where('id', '=', $id)->update($dataUser);
    return redirect()->route('admin.index')->with('success', 'Usuario actualizado con éxito');
}

// Método para eliminar un usuarios
public function destroyUser($id)
{
    $user = User::findOrFail($id);
    $user->delete();

    return redirect()->route('admin.index')->with('success', 'Usuario eliminado con éxito');
}

}

