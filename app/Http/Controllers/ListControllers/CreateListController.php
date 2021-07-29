<?php

namespace App\Http\Controllers\ListControllers;

use App\Models\ShoppingList;
use App\Http\Requests\ListRequest;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpKernel\Exception\HttpException;

class CreateListController extends Controller
{
    protected $list;

    public function __construct(ShoppingList $list)
    {
        $this->list = $list;
    }
    
    public function create(ListRequest $request)
    {
        if(!isset($request->id)){
            throw new HttpException(500, "User's id doesn't exists.");
        }

        $this->list->user_id = $request->id;
        $this->list->name = $request->name;

        if(!$this->list->save()){
            throw new HttpException(500, "Saving shopping list went wrong");
        }

        return true;
    }
}