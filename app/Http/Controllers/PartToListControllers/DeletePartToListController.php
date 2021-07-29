<?php

namespace App\Http\Controllers\PartToListControllers;

use App\Models\PartsToList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpKernel\Exception\HttpException;

class DeletePartToListController extends Controller
{
    public function delete($id){
        
        if(!PartsToList::first()->where('part_id', $id))
        {
            return throw new HttpException(500, "wrong id");
        }
        $item = DB::table("part_shopping_list")->first();
        
        PartsToList::destroy($item->id);
        
        return redirect()->back();
    }
}
