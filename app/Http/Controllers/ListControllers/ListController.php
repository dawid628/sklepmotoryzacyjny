<?php

namespace App\Http\Controllers\ListControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ListController extends Controller
{
    public function create(){
        return view('list.create');
    }
}
