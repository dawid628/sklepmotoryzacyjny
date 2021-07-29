<?php

namespace App\Http\Controllers\ListControllers;

use App\Models\Cart;
use App\Models\Part;
use App\Models\ShoppingList;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ListToCartController extends Controller
{
    public function add($id, Request $request){

        $list = ShoppingList::find($id)->parts()->get();
        //$list = Part::with('lists')->where('lists.id', $id)->get();

        foreach($list as $item){
            
            $product = new Cart();

            $product->user_id = $request->user()->id;
            $product->part_id = $item->id;
            $product->save();
        }
        return redirect()->route('cart.show');
    }
}
