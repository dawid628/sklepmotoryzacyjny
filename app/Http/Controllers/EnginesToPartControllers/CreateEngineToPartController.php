<?php

namespace App\Http\Controllers\EnginesToPartControllers;

use Illuminate\Http\Request;
use App\Models\EnginesToPart;
use App\Http\Controllers\Controller;

class CreateEngineToPartController extends Controller
{
    public function create_engine_part(Request $request)
    {
        $engine_part = new EnginesToPart();

        $engine_part->engine_id = $request->engine_id;
        $engine_part->part_id = $request->part_id;

        $engine_part->save();
    }
}
