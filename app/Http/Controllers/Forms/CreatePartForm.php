<?php

namespace App\Http\Controllers\Forms;

use App\Models\Part;
use Illuminate\Http\Request;
use App\Http\Controllers\Forms\EnginesPartForm;
use App\Http\Controllers\Forms\CategoriesPartForm;
use App\Http\Controllers\Forms\CarsPartForm;

class CreatePartForm
{
    public function CreateNewPart(Request $request)
    {
        $request->validate([

            'name' => 'required|min:3',
            'price' => 'required',//|regex:/^\d*(\.\d{1,2})?$/',
            'category_ids' => 'required',
            'bodywork_ids' => 'required',
            'engine_ids' => 'required',
            'car_ids' => 'required',
            
        ]);
        
        //stworzenie rekordu dla nowej części
        $part = new Part();
        $part->name = $request->name;
        $part->price = $request->price;
        $part->save();

        $this->create_records($request, $part->id);
        
    }

    public function create_records(Request $request, $id)
    {
        
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