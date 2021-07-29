<?php

namespace App\Http\Controllers\AdminControllers;

use App\Models\Part;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\PartsControllers\IndexPartController;

class PanelController extends Controller
{
 
    public function index()
    {
        return view('admin.index');
    }

    public function parts()
    {
        $parts = Part::with('bodyworks', 'cars', 'engines', 'categories')->paginate(5);
        return view('admin.parts', ['parts' => $parts]);
    }

    public function users()
    {
        $users = User::with('roles')->paginate(5);
        return view('admin.users', ['users' => $users]);
    }

    public function create()
    {
        return view('admin.create');
    }
}