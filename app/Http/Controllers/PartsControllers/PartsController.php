<?php

namespace App\Http\PartsControllers\PartsController;

use App\Models\Part;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpKernel\Exception\HttpException;

class PartsController extends Controller
{
    public function edit($id)
    {
        if(!Part::find($id)){
            throw new HttpException(500, "Part doesn't exist.");
        }
        
        $parts = Part::find($id);

        return view('admin.edit', ['parts' => $parts]);
    }
}
