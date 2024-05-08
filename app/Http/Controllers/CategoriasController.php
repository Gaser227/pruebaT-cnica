<?php

namespace App\Http\Controllers;

use App\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoriasController extends Controller
{
    /*public function categoria(){
        //return view('welcome');
        return view('categoria.categoria');
    }*/
    public function categoria()
    {
        $categorias = Categoria::all();
        return view('categoria.categoria', ['categorias' => $categorias]);
    }
    //Redireccionar
    public function redirectToCategorias() {
        return redirect()->route('categorias');
    }
    //Controlador para redireccionar a la vista create
    public function create()
    {
        return view('categoria.create');
    }
    //Controlador para el guardado
    public function store(Request $request)
    {
    $request->validate([
        'nombreCategoria' => 'required',
        'descripcion' => 'required'
    ]);

    $categoriaData = $request->except('_token');

    Categoria::create($categoriaData);

    return redirect()->route('categorias')->with('success', 'Categoría creada correctamente.');
    }
    //Controlador para redireccionar a la vista create
    public function edit(Categoria $categoria)
    {
        return view('categoria.create')->with('categoria', $categoria);
    }
    //Controlador para la actualizacion
    public function update(Request $request, Categoria $categoria)
    {
        $request->validate([
            'nombreCategoria' => 'required',
            'descripcion' => 'required'
        ]);
    
        $categoriaData = $request->except('_token'); // Excluir el campo _token
    
        $categoria->update($categoriaData);
    
        return redirect()->route('categorias')
            ->with('success', 'Categoría actualizada correctamente.');
    }
    //Controlador para la eliminacion
    public function destroy(Categoria $categoria)
    {
        $categoria->delete();

        return redirect()->route('categorias')
            ->with('success', 'Categoría eliminada correctamente.');
    }
}