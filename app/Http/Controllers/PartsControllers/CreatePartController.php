<?php

namespace App\Http\Controllers\PartsControllers;

use App\Http\Requests\PartRequest;
use App\Http\Controllers\Controller;
use App\Http\Forms\CreatePartForm;
use Symfony\Component\HttpKernel\Exception\HttpException;

class CreatePartController extends Controller
{
    public function Create(PartRequest $request){

        $cust = new CreatePartForm();

        if(!($cust->CreateNewPart($request))) {
            throw new HttpException(500, "Something went wrong!");
        }
       
        return redirect()->route('panel')->with('message', 'Added part succesfully.'); 
    }
}
