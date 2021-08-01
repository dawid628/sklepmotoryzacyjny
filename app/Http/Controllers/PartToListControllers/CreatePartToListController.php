<?php

namespace App\Http\Controllers\PartToListControllers;

use App\Models\Part;
use App\Models\PartsToList;
use App\Models\ShoppingList;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpKernel\Exception\HttpException;

class CreatePartToListController extends Controller
{
    public function create(Request $request){

        if(!(ShoppingList::find($request->list_id) && Part::find($request->part_id))){

            return throw new HttpException(500, "List or part doesn't exist.");
        }
        
        $item = new PartsToList();
        $item->shopping_list_id = $request->list_id;
        $item->part_id = $request->part_id;
        $item->save();
        
        return redirect()->back();
    }
}
