<?php

namespace App\Http\Controllers\CategoriesToPartControllers;

use Illuminate\Http\Request;
use App\Models\CategoriesToPart;
use App\Http\Controllers\Controller;

class CreateCategoryToPartController extends Controller
{
    public function CreateCategoryPart(Request $request){
        
        $category_part = new CategoriesToPart();

        $category_part->category_id = $request->category_id;
        $category_part->part_id = $request->part_id;

        $category_part->save();
    }
}
