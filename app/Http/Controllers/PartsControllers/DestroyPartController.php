<?php

namespace App\Http\Controllers\PartsControllers;

use App\Models\Part;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpKernel\Exception\HttpException;

class DestroyPartController extends Controller
{
    public function Destroy($id){
        
        if(!Part::find($id)){
            throw new HttpException(500, "Part doesn't exist.");
        }

            DB::table("bodywork_part")->where("part_id", $id)->delete();
            DB::table("category_part")->where("part_id", $id)->delete();
            DB::table("engine_part")->where("part_id", $id)->delete();
            DB::table("car_part")->where("part_id", $id)->delete();
            DB::table("parts")->where("id", $id)->delete();

            return redirect()->back()->with('message', 'Part deleted succesfully.');
    }
}
