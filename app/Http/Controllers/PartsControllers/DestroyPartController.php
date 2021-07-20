<?php

namespace App\Http\Controllers\PartsControllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class DestroyPartController extends Controller
{
    public function Destroy($id){
        
        DB::table("bodywork_part")->where("part_id", $id)->delete();
        DB::table("category_part")->where("part_id", $id)->delete();
        DB::table("engine_part")->where("part_id", $id)->delete();
        DB::table("car_part")->where("part_id", $id)->delete();
        DB::table("parts")->where("id", $id)->delete();
        
        return redirect()->route('panel')->with('message', 'Deleted succesfully.');
    }
}
