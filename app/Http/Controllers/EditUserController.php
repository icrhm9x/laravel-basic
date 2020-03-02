<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\editUserRequest;
use App\Models\Users;

class EditUserController extends Controller
{
    function getEditUser($idUser)
    {
        $data['user'] = Users::findorfail($idUser); // tim hieu them ve Exceptions trong Laravel
        return view('edit_user', $data);
    }

    function postEditUser(editUserRequest $r, $idUser)
    {
        $user = Users::findorfail($idUser);
        $user->full = $r->full;
        $user->phone = $r->phone;
        $user->address = $r->address;
        $user->id_number = $r->id_number;
        $user->save();
        return redirect('/user');
    }
}
