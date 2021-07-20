<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\User;

class DeleteUserController extends Controller
{
    public function delete($id)
    {
        DB::table("role_user")->where("user_id", $id)->delete();
        DB::table("users")->where("id", $id)->delete();

        return redirect()->back();

    }
}