<?php

namespace App\Http\Controllers\BodyworksToPartControllers;

use App\Models\Part;
use App\Models\Bodywork;
use App\Models\BodyworksToPart;
use App\Http\Requests\PartRequest;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpKernel\Exception\HttpException;

class CreateBodyworkToPartController extends Controller
{
    public function CreateBodyworkPart(PartRequest $request){

        if(!Bodywork::find($request->bodywork_id) || !Part::find($request->part_id)){
            return new HttpException(500, "Bodywork's id doesn't exist.");
        }

        $bodywork_part = new BodyworksToPart();
        $bodywork_part->bodywork_id = $request->bodywork_id;
        $bodywork_part->part_id = $request->part_id;
        $bodywork_part->save();
        return;
    }
}
