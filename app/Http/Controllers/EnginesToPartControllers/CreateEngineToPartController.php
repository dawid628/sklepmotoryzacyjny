<?php

namespace App\Http\Controllers\EnginesToPartControllers;

use App\Models\Part;
use App\Models\Engine;
use App\Models\EnginesToPart;
use App\Http\Requests\PartRequest;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpKernel\Exception\HttpException;

class CreateEngineToPartController extends Controller
{
    public function CreateEnginePart(PartRequest $request)
    {
        if(!Engine::find($request->engine_id) || !Part::find($request->part_id)){
            return new HttpException(500, "Engine's id doesn't exist.");
        }

        $engine_part = new EnginesToPart();
        $engine_part->engine_id = $request->engine_id;
        $engine_part->part_id = $request->part_id;
        $engine_part->save();
        
        return;
    }
}
