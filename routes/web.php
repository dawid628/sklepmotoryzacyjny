<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PartsController;
use App\Http\Controllers\Auth\DeleteUserController;
use App\Http\Controllers\CartControllers\CartController;
use App\Http\Controllers\AdminControllers\PanelController;
use App\Http\Controllers\PartsControllers\EditPartController;
use App\Http\Controllers\PartsControllers\ShowPartController;
use App\Http\Controllers\PartsControllers\IndexPartController;
use App\Http\Controllers\PartsControllers\CreatePartController;
use App\Http\Controllers\PartsControllers\SearchPartController;
use App\Http\Controllers\PartsControllers\DestroyPartController;

Route::get('sendbasicemail',[MailController::class, 'basic_email']);

Route::get('/', [IndexPartController::class, 'Index'])->name('index');

Route::get('/show/{id}', [ShowPartController::class, 'Show']);

Route::get('/search/{category_id}', [SearchPartController::class, 'SearchByCategory']); 

Auth::routes();

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
});

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');
Route::get('delete/{id}', [CartController::class, 'delete'])->name('cart.delete');