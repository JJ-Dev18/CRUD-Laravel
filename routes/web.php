<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpresaController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::resource('empresas','EmpresaController');
Route::resource('ventas', 'VentaController');
// Route::get('/empresas',[EmpresaController::class, 'index'])->name('empresas.index');
// Route::get('/empresas/create', [EmpresaController::class , 'create'])->name('empresas.create');

// Route::get('/empresas/{empresa}/edit',[EmpresaController::class, 'edit'])->name('empresas.edit');
// Route::patch('/empresas/{empresa}',[EmpresaController::class, 'update'])->name('empresas.update');

// Route::delete('/empresas/{empresa}', [EmpresaController::class ,'destroy'])->name('empresas.destroy');

// Route::post('/empresas', [EmpresaController::class , 'store'])->name('empresas.store');
// Route::get('/empresas/{empresa}',[EmpresaController::class, 'show'])->name('empresas.show');

