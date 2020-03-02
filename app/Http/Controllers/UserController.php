<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function getUser(request $r)
    {
        if ($r->search != '') {
            $data['users'] = Users::where('full', 'like', '%' . $r->search . '%')
                ->orwhere('phone', 'like', '%' . $r->search . '%')
                ->orwhere('address', 'like', '%' . $r->search . '%')
                ->orwhere('id_number', 'like', '%' . $r->search . '%')
                ->orderBy('id', 'desc')
                ->paginate(10);
        } else {
            // $data['users'] = Users::all()->sortByDesc("id");
            // $data['users'] = Users::orderBy('id', 'desc')->get();
            $data['users'] = Users::orderBy('id', 'desc')->paginate(10);
        }
        return view('user', $data);
    }

    function delUser($idUser)
    {
        Users::findorfail($idUser)->delete();
        return redirect('/user');
    }
}
