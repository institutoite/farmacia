<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProveedoreController;
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
Route::get('/proveedores',[ProveedoreController::class,'index'])->name('proveedor.index');
Route::get('/proveedores/crear', [ProveedoreController::class, 'create']);
Route::post('/proveedor/guardar', [ProveedoreController::class, 'store'])->name('proveedore.guardar');
