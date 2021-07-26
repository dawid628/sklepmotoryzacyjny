<?php

namespace App\Http\Forms;

use App\Models\BodyworksToPart;
use Illuminate\Http\Request;

class BodyworksPartForm
{
    public function CreateBodyworkPart(Request $request, $id){

        if(is_array($request->bodywork_ids)){
       
            foreach($request->bodywork_ids as $bodywork){

                $bodywork_part = new BodyworksToPart();
        
                $bodywork_part->part_id = $id;
                $bodywork_part->bodywork_id = $bodywork;

                $bodywork_part->save();
            }
        }

        if(!is_array($request->bodywork_ids))
        {
            $bodywork_part = new BodyworksToPart();
        
            $bodywork_part->part_id = $id;
            $bodywork_part->bodywork_id = $request->bodywork_ids;

            $bodywork_part->save();
        }
    }

    public function delete_bodywork_part(Request $request){

        $bodywork_part = BodyworksToPart::find()->where('part_id', $request->part_id)->where('bodywork_id', $request->bodywork_id);
    }
}