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
    public function redirectToCategorias() {
        return redirect()->route('categorias');
    }
    public function create()
    {
        return view('categoria.create');
    }

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

    public function edit(Categoria $categoria)
    {
        return view('categoria.create')->with('categoria', $categoria);
    }

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

    public function destroy(Categoria $categoria)
    {
        $categoria->delete();

        return redirect()->route('categorias')
            ->with('success', 'Categoría eliminada correctamente.');
    }
}