<?php

namespace App\Http\Controllers\PartsControllers;

use App\Models\Part;
use App\Http\Requests\EditRequest;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpKernel\Exception\HttpException;

class EditPartController extends Controller
{
    public function Edit(EditRequest $request, int $id){
        
        if(!$part = Part::find($id)){
            throw new HttpException(500, "Wrong part's id.");
        }
        
            $part->name = $request->name;
            $part->price = $request->price;

            $part->save();
        
            return redirect()->route('panel')->with('message', $part);
    }
}
