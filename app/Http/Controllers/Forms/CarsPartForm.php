<?php

namespace App\Http\Controllers\Forms;

use App\Models\CarsToPart;
use Illuminate\Http\Request;
use App\Models\BodyworksToPart;

class CarsPartForm
{
    public function CreateCarPart(Request $request, $id){

       foreach($request->car_ids as $car){

        $car_part = new CarsToPart();
        
        $car_part->car_id = $car;
        $car_part->part_id = $id;

        $car_part->save();
       }
    }
}