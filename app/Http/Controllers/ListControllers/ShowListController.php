<?php

namespace App\Http\Controllers\ListControllers;

use App\Models\Part;
use App\Models\ShoppingList;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpKernel\Exception\HttpException;

class ShowListController extends Controller
{
    public function show($id){

        if(!ShoppingList::find($id)){
            return throw new HttpException(500, "Wrong list's id.");
        }

        $lists = ShoppingList::find($id)->parts();
        $lists = $lists->get();
        
        //return $lists->toJson();
        return view('list.show', ['lists' => $lists]);
    }
}
