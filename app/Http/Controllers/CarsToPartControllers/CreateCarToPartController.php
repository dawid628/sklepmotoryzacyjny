<?php

namespace App\Http\Controllers\CarsToPartControllers;

use App\Models\CarsToPart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CreateCarToPartController extends Controller
{
    public function CreateCarPart(Request $request){
        
        $car_part = new CarsToPart();

        $car_part->car_id = $request->car_id;
        $car_part->part_id = $request->part_id;

        $car_part->save();
    }
}
