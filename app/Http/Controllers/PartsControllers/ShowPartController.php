<?php

namespace App\Http\Controllers\PartsControllers;

use App\Models\Part;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpKernel\Exception\HttpException;

class ShowPartController extends Controller
{
    public function Show(int $id){

        if(!Part::find($id)){
            throw new HttpException(500, "Wrong part's id.");
        }
        
            $part = Part::find($id);
            $part = Part::with('bodyworks', 'categories', 'cars')->where('id', $id)->get();
        
            return $part->toJson();
    }
}
