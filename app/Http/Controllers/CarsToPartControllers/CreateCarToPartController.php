<?php

namespace App\Http\Controllers\CarsToPartControllers;

use App\Models\Car;
use App\Models\Part;
use App\Models\CarsToPart;
use App\Http\Requests\PartRequest;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpKernel\Exception\HttpException;

class CreateCarToPartController extends Controller
{
    public function CreateCarPart(PartRequest $request){

        if(!Car::find($request->car_id) || !Part::find($request->part_id)){
            return new HttpException(500, "Car's id doesn't exist.");
        }
        
        $car_part = new CarsToPart();
        $car_part->car_id = $request->car_id;
        $car_part->part_id = $request->part_id;
        $car_part->save();
        return;
    }
}
