<?php

namespace Tests\Feature;

use PHPUnit\Framework\TestCase;
use App\Models\ShoppingList;
use App\Http\Requests\ListRequest;
use App\Http\Controllers\ListControllers\CreateListController;
use Symfony\Component\HttpKernel\Exception\HttpException;

class CreateListTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */

    public function testListCreating()
    {  
      $this->expectExceptionMessage('Saving shopping list went wrong');      

        /** @var ShoppingList $shoppingList */
        $shoppingList = $this->createMock(ShoppingList::class);
        $shoppingList->method('save')->willReturn(false);

        //  $request = $this->createMock(ListRequest::class);
        $request = new ListRequest();
        $request->name = 'mmm';
        $request->id = 3;

        $controller = new CreateListController($shoppingList);
        $controller->create($request);
      }
}