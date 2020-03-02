<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditUserController extends Controller
{
    function getEditUser()
    {
        return view('edit_user');
    }
}
