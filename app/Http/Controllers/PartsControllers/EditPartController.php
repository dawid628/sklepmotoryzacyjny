<?php

namespace App\Http\Controllers\PartsControllers;

use App\Models\Part;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EditPartController extends Controller
{
    public function Edit(int $id, Request $request){
        
        $part = Part::find($id);
        
        $part->name = $request->name;
        $part->price = $request->price;

        $part->save();

        return redirect()->route('panel')->with('message', 'Updated part succesfully.');
        
    }
}
