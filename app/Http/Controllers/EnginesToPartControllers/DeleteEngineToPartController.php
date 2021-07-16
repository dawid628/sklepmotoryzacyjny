<?php

namespace App\Http\Controllers\EnginesToPartControllers;

use Illuminate\Http\Request;
use App\Models\EnginesToPart;
use App\Http\Controllers\Controller;

class DeleteEngineToPartController extends Controller
{
    public function delete_engine_part($id)
    {
        EnginesToPart::destroy($id);
    }
}
