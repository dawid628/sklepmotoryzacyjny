<?php

namespace App\Http\Controllers\BodyworksToPartControllers;

use Illuminate\Http\Request;
use App\Models\BodyworksToPart;
use App\Http\Controllers\Controller;

class CreateBodyworkToPartController extends Controller
{
    public function CreateBodyworkPart(Request $request){

        $bodywork_part = new BodyworksToPart();

        $bodywork_part->bodywork_id = $request->bodywork_id;
        $bodywork_part->part_id = $request->part_id;

        $bodywork_part->save();
    }
}
