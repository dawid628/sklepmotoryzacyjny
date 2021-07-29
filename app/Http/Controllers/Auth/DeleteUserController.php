<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User;

class DeleteUserController extends Controller
{
    public function delete($id)
    {
        if(User::find($id)){

        DB::table("role_user")->where("user_id", $id)->delete();
        DB::table("users")->where("id", $id)->delete();

        return redirect()->back()->with('message', 'User deleted succesfully.');
        }

        if(!User::find($id))
            return "User doesn't exists.";

    }
}
