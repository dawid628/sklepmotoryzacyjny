<?php

namespace App\Http\Controllers\BodyworksToPartControllers;

use Illuminate\Http\Request;
use App\Models\BodyworksToPart;
use App\Http\Controllers\Controller;

class DeleteBodyworkToPartController extends Controller
{
    public function DeleteBodyworkPart($id){

        if(BodyworksToPart::find($id)){
            BodyworksToPart::destroy($id);
        }
    }
}
