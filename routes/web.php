<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PartsControllers\EditPartController;
use App\Http\Controllers\PartsControllers\ShowPartController;
use App\Http\Controllers\PartsControllers\IndexPartController;
use App\Http\Controllers\PartsControllers\CreatePartController;
use App\Http\Controllers\PartsControllers\SearchPartController;
use App\Http\Controllers\PartsControllers\DestroyPartController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', [IndexPartController::class, 'Index']);

Route::get('/show/{id}', [ShowPartController::class, 'Show']);

Route::get('/delete/{id}', [DestroyPartController::class, 'Destroy']);

Route::get('/create', [CreatePartController::class, 'Create']);

Route::get('/edit/{id}', [EditPartController::class, 'Edit']);

Route::get('/search/{category_id}', [SearchPartController::class, 'SearchByCategory']);