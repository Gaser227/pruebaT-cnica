<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\CategoriasController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route:: get('/', [HomeController::class, 'index'])->name(('index'));

//Route:: get('/categorias', [CategoriasController::class, 'categoria']);
Route:: get('/categorias', [CategoriasController::class, 'categoria'])->name('categorias');
Route:: get('/categorias/create', [CategoriasController::class, 'create'])->name('categorias.create');
Route:: post('/categorias/store', [CategoriasController::class, 'store'])->name('categorias.store');
Route:: get('/categorias/{categoria}/edit', [CategoriasController::class, 'edit'])->name('categorias.edit');
Route:: put('/categorias/{categoria}', [CategoriasController::class, 'update'])->name('categorias.update');
Route:: delete('/categorias/{categoria}', [CategoriasController::class, 'destroy'])->name('categorias.destroy');

Route:: get('/productos', [ProductoController::class, 'producto'])->name('productos');
Route:: get('/productos/create', [ProductoController::class, 'create'])->name('productos.create');
Route:: post('/productos/store', [ProductoController::class, 'store'])->name('productos.store');
Route:: get('/productos/{producto}/edit', [ProductoController::class, 'edit'])->name('productos.edit');
Route:: put('/productos/{producto}', [ProductoController::class, 'update'])->name('productos.update');
Route:: delete('/productos/{producto}', [ProductoController::class, 'destroy'])->name('productos.destroy');