<?php

namespace App\Http\Controllers\ListControllers;

use App\Models\ShoppingList;
use App\Http\Requests\ListRequest;
use App\Http\Controllers\Controller;

class CreateListController extends Controller
{
    public function create(ListRequest $request){

        $list = new ShoppingList();

        $list->name = $request->name;
        $list->user_id = $request->user()->id;

        $list->save();

        return redirect()->route('list')->with('message', 'Created list.');
    }
}
