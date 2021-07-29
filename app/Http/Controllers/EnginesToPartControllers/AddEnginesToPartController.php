<?php

namespace App\Http\Controllers;

use App\Models\EnginesToPart;
use Illuminate\Http\Request;

class AddEnginesToPartController extends Controller
{
    
    public function add_engine_part(Request $request)
    {
        $engine_part = new EnginesToPart();

        $engine_part->engine_id = $request->engine_id;
        $engine_part->part_id = $request->part_id;

        $engine_part->save();
    }
}
