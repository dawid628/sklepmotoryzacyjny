<?php

namespace App\Http\Controllers\CategoriesToPartControllers;

use Illuminate\Http\Request;
use App\Models\CategoriesToPart;
use App\Http\Controllers\Controller;

class DeleteCategoryToPartController extends Controller
{
    public function DeleteCategoryPart($id){

        if(CategoriesToPart::find($id)){
            CategoriesToPart::destroy($id);
        }
    }
}
