<?php

namespace App\Http\Controllers\CarsToPartControllers;

use App\Models\CarsToPart;
use App\Http\Controllers\Controller;

class DeleteCarToPartController extends Controller
{
    public function DeleteCarPart($id){

        CarsToPart::destroy($id);
    }
}
