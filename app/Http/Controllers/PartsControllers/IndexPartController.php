<?php

namespace App\Http\Controllers\PartsControllers;

use App\Models\Part;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexPartController extends Controller
{
    public function Index(Request $request): string{

        $query = $this->getQuery($request);

        if(isset($request->name))
        $query = $query->where([
            ['parts.name', '=', $request->name],
        ]);

        if(isset($request->category))
        $query = $query->where([
            ['category_part.category_id', '=', $request->category],
        ]);

        if(isset($request->car))
        $query = $query->where([
            ['car_part.car_id', '=', $request->car],
        ]);

        if(isset($request->bodywork))
        $query = $query->where([
            ['bodywork_part.bodywork_id', '=', $request->bodywork],
        ]);

        if(isset($request->engine))
        $query = $query->where([
            ['engine_part.engine_id', '=', $request->engine],
        ]);
      
        return $query->select('parts.id','parts.name', 'parts.price')->get()->toJson();
    }

    private function getQuery(Request $request){
        
        return Part::with('bodyworks', 'categories', 'cars', 'engines')
        ->join('category_part', 'parts.id', '=', 'category_part.part_id')
        ->join('categories', 'categories.id', '=', 'category_part.category_id')
        ->join('car_part', 'parts.id', '=', 'car_part.part_id')
        ->join('cars', 'cars.id', '=', 'car_part.car_id')
        ->join('bodywork_part', 'parts.id', '=', 'bodywork_part.part_id')
        ->join('bodyworks', 'bodyworks.id', '=', 'bodywork_part.bodywork_id')
        ->join('engine_part', 'parts.id', '=', 'engine_part.part_id')
        ->join('engines', 'engines.id', '=', 'engine_part.engine_id');
    }
}
