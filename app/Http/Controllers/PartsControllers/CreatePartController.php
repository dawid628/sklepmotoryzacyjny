<?php

namespace App\Http\Controllers\PartsControllers;

use Illuminate\Http\Request;
use App\Http\Requests\PartRequest;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Forms\CreatePartForm;

class CreatePartController extends Controller
{
    public function Create(PartRequest $request){

        $cust = new CreatePartForm();
        $cust->CreateNewPart($request);
       
        return redirect()->route('panel')->with('message', 'Added part succesfully.');
    }
}
