<?php

namespace App\Http\Controllers\PartsControllers;

use App\Models\Part;
use App\Http\Controllers\Controller;

class ShowPartController extends Controller
{
    public function Show(int $id): string{

        $part = Part::with('bodyworks', 'categories', 'cars')->where('id', $id)->get();
        
        return $part->toJson();
    }
}
