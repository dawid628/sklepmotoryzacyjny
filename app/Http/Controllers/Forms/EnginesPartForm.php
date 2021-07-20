<?php

namespace App\Http\Controllers\Forms;

use App\Models\EnginesToPart;
use Illuminate\Http\Request;

class EnginesPartForm
{
    public function CreateEnginePart(Request $request, $id){

        if(is_array($request->engine_ids)){    

            foreach($request->engine_ids as $engine){

                $engine_part = new EnginesToPart();
        
                $engine_part->part_id = $id;
                $engine_part->engine_id = $engine;

                $engine_part->save();
            }
        }

        if(!is_array($request->engine_ids)){

            $engine_part = new EnginesToPart();
        
            $engine_part->part_id = $id;
            $engine_part->engine_id = $request->engine_ids;

            $engine_part->save();   
        }
    }
}