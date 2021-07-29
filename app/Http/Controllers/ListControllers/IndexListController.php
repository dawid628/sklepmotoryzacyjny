<?php

namespace App\Http\Controllers\ListControllers;

use App\Http\Controllers\Controller;
use App\Models\ShoppingList;
use Illuminate\Http\Request;

class IndexListController extends Controller
{
    public function index(Request $request){

        $list = ShoppingList::all()->where('user_id', $request->user()->id);

        return view('list.index', ['lists' => $list]);
    }
}
