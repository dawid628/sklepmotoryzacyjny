<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\DeleteUserController;
use App\Http\Controllers\CartControllers\CartController;
use App\Http\Controllers\ListControllers\ListController;
use App\Http\Controllers\AdminControllers\PanelController;
use App\Http\Controllers\PartsControllers\PartsController;
use App\Http\Controllers\ListControllers\ShowListController;
use App\Http\Controllers\ListControllers\IndexListController;
use App\Http\Controllers\PartsControllers\EditPartController;
use App\Http\Controllers\PartsControllers\ShowPartController;
use App\Http\Controllers\ListControllers\CreateListController;
use App\Http\Controllers\ListControllers\DeleteListController;
use App\Http\Controllers\ListControllers\ListToCartController;
use App\Http\Controllers\PartsControllers\IndexPartController;
use App\Http\Controllers\PartsControllers\CreatePartController;
use App\Http\Controllers\PartsControllers\SearchPartController;
use App\Http\Controllers\PartsControllers\DestroyPartController;
use App\Http\Controllers\PartToListControllers\CreatePartToListController;
use App\Http\Controllers\PartToListControllers\DeletePartToListController;

Route::group(['middleware' => 'roles', 'roles' => ['admin', 'moderator']], function(){

    Route::get('/admin', [PanelController::class, 'index'])->name('panel');

    Route::get('/admin/parts', [PanelController::class, 'parts'])->name('panel.parts');

    Route::get('/admin/users', [PanelController::class, 'users'])->name('panel.users');

    Route::get('/create', [PanelController::class, 'create'])->name('add.part');

    Route::get('/edit/{id}', [PartsController::class, 'edit'])->name('edit.part');

    Route::put('/update/{id}', [EditPartController::class, 'Edit'])->name('part.update');

    Route::post('/store', [CreatePartController::class, 'Create'])->name('store');
});

Route::group(['middleware' => 'roles', 'roles' => ['admin']], function(){

    Route::delete('/delete/part/{id}', [DestroyPartController::class, 'Destroy'])->name('delete.part');

    Route::delete('/delete/user/{id}', [DeleteUserController::class, 'delete'])->name('delete.user');
});

Route::group(['middleware' => 'roles', 'roles' => ['user', 'admin', 'moderator']], function(){

    Route::get('/cart', [CartController::class, 'index'])->name('cart.show');

    Route::post('/cartadd', [CartController::class, 'add'])->name('cart.add');

    Route::get('/list/show/{id}', [ShowListController::class, 'show'])->name('list.show');

    //dodawanie czesci do listy
    Route::get('/parttolist', [CreatePartToListController::class, 'create'])->name('list.add');

    //wyswietla listy uzytkownika
    Route::get('/list', [IndexListController::class, 'index'])->name('list');

    //wyswietla widok tworzenia listy
    Route::get('/listcreating', [ListController::class, 'create'])->name('list.creating');

    //tworzy liste (nazwa, id)
    Route::post('/listcreating/create', [CreateListController::class, 'create'])->name('list.create');

    //usuniecie listy   
    Route::delete('/list/delete/{id}', [DeleteListController::class, 'delete'])->name('list.delete');

    //usuniecie pozycji z listy
    Route::delete('/list/show/delete/{id}', [DeletePartToListController::class, 'delete'])->name('listpart.delete');

    Route::get('/tocart/{id}', [ListToCartController::class, 'add'])->name('list.cart');

});

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');

Route::get('delete/{id}', [CartController::class, 'delete'])->name('cart.delete');

Route::get('/', [IndexPartController::class, 'Index'])->name('index');

Route::get('/show/{id}', [ShowPartController::class, 'Show']);

Route::get('/search/{category_id}', [SearchPartController::class, 'SearchByCategory']);

Auth::routes();