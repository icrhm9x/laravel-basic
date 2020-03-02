<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AddUserRequest;
use App\Models\Users;

class AddUserController extends Controller
{
    function getAddUser()
    {
        return view('add_user');
    }

    function postAddUser(AddUserRequest $r)
    {
        // dd($r->all());
        $user = new Users();
        $user->full = $r->full;
        $user->phone = $r->phone;
        $user->address = $r->address;
        $user->id_number = $r->id_number;
        $user->save();
        return redirect('/user');
    }
}
