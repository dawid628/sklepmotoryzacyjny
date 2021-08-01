<?php

namespace App\Http\Controllers\CategoriesToPartControllers;

use App\Models\Part;
use App\Models\Category;
use App\Models\CategoriesToPart;
use App\Http\Requests\PartRequest;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpKernel\Exception\HttpException;

class CreateCategoryToPartController extends Controller
{
    public function CreateCategoryPart(PartRequest $request){

        if(!Category::find($request->category_id) || !Part::find($request->part_id)){
            return new HttpException(500, "Category's it doesn't exist.");
        }

        $category_part = new CategoriesToPart();
        $category_part->category_id = $request->category_id;
        $category_part->part_id = $request->part_id;
        $category_part->save();
        return;
    }
}
