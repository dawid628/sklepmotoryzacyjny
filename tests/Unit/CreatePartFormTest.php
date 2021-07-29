<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Http\Forms\CreatePartForm;
use App\Http\Requests\PartRequest;

class CreatePartFormTest extends TestCase
{

    public function testForm()
    {   

        // $mock = $this->mock(CreatePartForm::class, function (MockInterface $mock){
        //     $mock->shouldReceive('CreateNewPart', [            
        //     'name' => 'LDKFO',
        //     'price' => 340,
        //     'category_ids' => 3,
        //     'bodywork_ids' => 3,
        //     'engine_ids' => 3,
        //     'car_ids' => 3,])
        //     ->times(1);
        // });

        $request = new PartRequest([
            'name' => 'LDKFO',
            'price' => 340,
            'category_ids' => 3,
            'bodywork_ids' => 3,
            'engine_ids' => 3,
            'car_ids' => 3,
        ]);

        $controller = new CreatePartForm();
        $controller->CreateNewPart($request);
        
        $this->assertDatabaseHas('parts', [
            'name' => 'LDKFO',
            'price' => 340,
        ]
        );

    }
}