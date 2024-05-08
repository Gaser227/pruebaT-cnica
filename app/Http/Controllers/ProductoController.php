<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /*public function producto(){
        //return view('welcome');
        return view('productos.producto');
    }*/
    public function producto(){
    $productos = Producto::all();
    return view('productos.producto', ['productos' => $productos]);
    }
    //Redireccionar
    public function redirectToProductos() {
        return redirect()->route('productos');
    }
    //Controlador para redireccionar a la vista create
    public function create()
    {
        $categorias = Categoria::all();
        return view('productos.create', ['categorias' => $categorias]);
    }
    //Controlador para el guardado
    public function store(Request $request)
    {
    $request->validate([
        'nombreProducto' => 'required',
        'precio' => 'required',
        'stock' => 'required',
        'categoria_id' => 'required'
    ]);

    $productoData = $request->except('_token');

    Producto::create($productoData);

    return redirect()->route('productos')
        ->with('success', 'Producto creado correctamente.');
    }
    //Controlador para redireccionar a la vista create
    public function edit(Producto $producto)
    {
        $categorias = Categoria::all();
        return view('productos.create', compact('producto', 'categorias'));
    }
    //Controlador para la actualizacion
    public function update(Request $request, Producto $producto)
    {
    $request->validate([
        'nombreProducto' => 'required',
        'precio' => 'required',
        'stock' => 'required',
        'categoria_id' => 'required'
    ]);

    $producto->update($request->except('_token'));

    return redirect()->route('productos')
        ->with('success', 'Producto actualizado correctamente.');
    }
    //Controlador para la eliminacion
    public function destroy(Producto $producto)
    {
        $producto->delete();

        return redirect()->route('productos')
            ->with('success', 'Producto eliminado correctamente.');
    }
}