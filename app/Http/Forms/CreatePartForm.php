<?php

namespace App\Http\Forms;

use App\Models\Part;
use App\Http\Forms\CarsPartForm;
use App\Http\Requests\PartRequest;
use App\Http\Forms\EnginesPartForm;
use App\Http\Forms\BodyworksPartForm;
use App\Http\Forms\CategoriesPartForm;
use Symfony\Component\HttpKernel\Exception\HttpException;

class CreatePartForm
{
    public function CreateNewPart(PartRequest $request)
    {
       
        $part = new Part();
        $part->name = $request->name;
        $part->price = $request->price;
        $part->save();

        $this->createRecords($request, $part->id);

        return redirect()->route('panel');      
    }

    public function createRecords(PartRequest $request, $id)
    {
        if(!Part::find($id)){
            return new HttpException(500, "Part's id doesn't exist.");
        }
        
        //stworzenie rekordów w tabeli przejsciowej category_part dla nowej części
        $category_part = new CategoriesPartForm();
        $category_part->CreateCategoryPart($request, $id);
        
        //stworzenie rekordów w tabeli przejsciowej car_part dla nowej części
        $car_part = new CarsPartForm();
        $car_part->CreateCarPart($request, $id);

        //stworzenie rekordów w tabeli przejsciowej bodywork_part dla nowej części
        $bodywork_part = new BodyworksPartForm();
        $bodywork_part->CreateBodyworkPart($request, $id);

        //stworzenie rekordów w tabeli przejsciowej engine_part dla nowej części
        $engine_part = new EnginesPartForm();
        $engine_part->CreateEnginePart($request, $id);
    }
}