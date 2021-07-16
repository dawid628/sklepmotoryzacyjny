<?php

namespace App\Http\Controllers\Forms;

use App\Models\CategoriesToPart;
use Illuminate\Http\Request;

class CategoriesPartForm
{
    public function CreateCategoryPart(Request $request, $id)
{
    
    foreach($request->category_ids as $category){
        
        $category_part = new CategoriesToPart();
        
        $category_part->category_id = $category;
        $category_part->part_id = $id;

        $category_part->save(); 
    }
    }
}