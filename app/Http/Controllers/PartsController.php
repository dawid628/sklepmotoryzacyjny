<?php

namespace App\Http\Controllers;

use App\Models\Part;
use Illuminate\Http\Request;

class PartsController extends Controller
{
    public function edit($id)
    {
        $parts = Part::find($id);

        return view('admin.edit', ['parts' => $parts]);
    }
}
