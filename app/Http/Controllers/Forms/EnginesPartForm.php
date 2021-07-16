<?php

namespace App\Http\Controllers\Forms;

use App\Models\EnginesToPart;
use Illuminate\Http\Request;

class EnginesPartForm
{
    public function CreateEnginePart(Request $request, $id)
    {

       foreach($request->engine_ids as $engine){

        $engine_part = new EnginesToPart();
        
        $engine_part->part_id = $id;
        $engine_part->engine_id = $engine;

        $engine_part->save();
    }
    }
}