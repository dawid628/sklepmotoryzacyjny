<?php

namespace App\Http\Controllers\PartsControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Forms\CreatePartForm;

class CreatePartController extends Controller
{
    public function Create(Request $request){

        $cust = new CreatePartForm();
        $cust->CreateNewPart($request);
    }
}
