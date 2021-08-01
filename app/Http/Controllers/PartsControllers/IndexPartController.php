<?php

namespace App\Http\Controllers\PartsControllers;

use App\Models\Part;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ShoppingList;

class IndexPartController extends Controller
{
    public function Index(Request $request){

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

        $parts = $query->paginate(4);//->toJson();

        if($request->user()){

            $lists = ShoppingList::all()->where('user_id', $request->user()->id);

            return view('index', ['parts' => $parts, 'lists' => $lists]);
        }

        return view('index', ['parts' => $parts]);
    }

    private function getQuery(Request $request){
        
        return Part::with('bodyworks', 'categories', 'cars', 'engines');
    }
}
