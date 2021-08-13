<?php

use App\Http\Controllers\AdministratorController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\DeliveryCompanyController;
use App\Http\Controllers\UserAdministratorController;
use Illuminate\Support\Facades\Route;

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

Route::get('administrador/login',[AdministratorController::class,'getLogin'])->name('administrator.login_view');
Route::post('administrador/login',[AdministratorController::class,'login'])->name('administrator.login');
Route::post('administrador/logout',[AdministratorController::class,'logout'])->name('administrator.logout'); 

Route::prefix('administrador')->middleware(['auth:administrator'])->group(function () {
    Route::get('menu',[UserAdministratorController::class,'menu'])->name('administrator.menu');

    //categories
    Route::get('categorias',[CategorieController::class,'index'])->name('administrator.categorie.index');
    Route::get('categoria/crear',[CategorieController::class,'create'])->name('administrator.categorie.create');
    Route::post('categoria/crear',[CategorieController::class,'store'])->name('administrator.categorie.store');
    Route::get('categoria/editar/{categorie}',[CategorieController::class,'edit'])->name('administrator.categorie.edit');
    Route::post('categoria/editar/{categorie}',[CategorieController::class,'update'])->name('administrator.categorie.update');
    Route::post('categoria/eliminar/{categorie}',[CategorieController::class,'destroy'])->name('administrator.categorie.delete');
    

    //products
    Route::get('productos',[ProductController::class,'index'])->name('administrator.product.index');
    Route::get('producto/crear',[ProductController::class,'create'])->name('administrator.product.create');
    Route::post('producto/crear',[ProductController::class,'store'])->name('administrator.product.store');
    Route::get('producto/editar/{product}',[ProductController::class,'edit'])->name('administrator.product.edit');
    Route::post('producto/editar/{product}',[ProductController::class,'update'])->name('administrator.product.update');
    Route::post('producto/eliminar/{product}',[ProductController::class,'destroy'])->name('administrator.product.delete');
    

    //deliverycompanies
    Route::get('empresas_envio',[DeliveryCompanyController::class,'index'])->name('administrator.deliveryCompany.index');
    Route::get('empresa_envio/crear',[DeliveryCompanyController::class,'create'])->name('administrator.deliveryCompany.create');
    Route::post('empresa_envio/crear',[DeliveryCompanyController::class,'store'])->name('administrator.deliveryCompany.store');
    Route::get('empresa_envio/editar/{deliveryCompany}',[DeliveryCompanyController::class,'edit'])->name('administrator.deliveryCompany.edit');
    Route::post('empresa_envio/editar/{deliveryCompany}',[DeliveryCompanyController::class,'update'])->name('administrator.deliveryCompany.update');
    Route::post('empresa_envio/eliminar/{deliveryCompany}',[DeliveryCompanyController::class,'destroy'])->name('administrator.deliveryCompany.delete');
    

});

