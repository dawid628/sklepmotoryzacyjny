<?php

namespace App\Http\PartsControllers\PartsController;

use App\Models\Part;
use App\Http\Controllers\Controller;

class PartsController extends Controller
{
    public function edit($id)
    {
        $parts = Part::find($id);

        return view('admin.edit', ['parts' => $parts]);
    }
}
