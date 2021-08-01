<?php

namespace App\Http\Controllers\ListControllers;

use App\Models\ShoppingList;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpKernel\Exception\HttpException;

class DeleteListController extends Controller
{
    public function delete($id){

        if(!ShoppingList::find($id)){
            throw new HttpException(500, "Part doesn't exist.");
        }

            DB::table("part_shopping_list")->where("shopping_list_id", $id)->delete();
            DB::table("lists")->where("id", $id)->delete();

            return redirect()->back()->with('message', 'List deleted succesfully.');
    }
}
